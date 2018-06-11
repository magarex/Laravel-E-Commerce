<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=GeneralSetting::first();
        return view('adminpanel.generalsettings.index', compact('settings'));
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
        unset($request['_token']);
        GeneralSetting::where('id',0)->update($request->input());

        $this->validate($request, [
            // check validtion for image or file
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        // rename image name or file name
        $getimageName = time().'.'.$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('img'), $getimageName);

        $request->merge([
            'logo' => $getimageName
        ]);


        GeneralSetting::where('id',0)->update($request->input());

        $settings = GeneralSetting::first();
        return view('adminpanel.generalsettings.index', compact('settings'));
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
