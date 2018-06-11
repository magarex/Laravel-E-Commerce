<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::first();
        return view('adminpanel.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
        {

            if($request->hasFile('slider1')) {

                $this->validate($request, [
                    // check validtion for image or file
                    'slider1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                // rename image name or file name
                $getimageName = time().'.'.$request->slider1->getClientOriginalExtension();
                $request->slider1->move(public_path('img'), $getimageName);

                $request->merge([
                    'slider1' => $getimageName
                ]);


            }

            if ($request->hasFile('slider2')) {
                $this->validate($request, [
                    // check validtion for image or file
                    'slider2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                $image = $request->file('slider2');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('img');
                $image->move($destinationPath, $name);
                $request->merge([
                    'slider2' => $name
                ]);

            }


            if($request->hasFile('slider3')) {

                $this->validate($request, [
                    // check validtion for image or file
                    'slider3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                // rename image name or file name
                $getimageName = time().'.'.$request->slider3->getClientOriginalExtension();
                $request->slider3->move(public_path('img'), $getimageName);

                $request->merge([
                    'slider3' => $getimageName
                ]);


            }



            $sliders = Slider::where('id',0)->firstOrFail();
            $sliders->update($request->input());
            $slider=Slider::first();
            return view('adminpanel.slider.index', compact('slider'));

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
