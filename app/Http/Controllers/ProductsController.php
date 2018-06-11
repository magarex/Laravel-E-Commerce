<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel.product.index');
    }


    public function getProducts(Request $request) {
        $products = Product::select(['id', 'name', 'description','price','image']);

        return Datatables::of($products)

            ->addColumn('image', function($products){
                return '<img src="../img/'.$products->image.'" width="150px;">';
            })

            ->addColumn('action', function ($products) {
                return '<a href="product/'.$products->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })



            ->rawColumns(['image' , 'action'])

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('adminpanel.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // check validtion for image or file
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        // rename image name or file name
        $getimageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img'), $getimageName);

        $request->merge([
            'image' => $getimageName
        ]);

        Product::create($request->input());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $products=Product::find($id);
        return view('adminpanel.product.edit',compact(['products' , 'categories']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if($request->hasFile('image')) {

            $this->validate($request, [
                // check validtion for image or file
                // rename image name or file name
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $getimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $getimageName);

            $request->merge([
                'image' => $getimageName
            ]);
        }


        Product::find($id)->update($request->input());
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('admin/product');
    }



}
