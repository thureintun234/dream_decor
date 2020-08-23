<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('backend.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'price' => 'required'
        ]);

         //upload image
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/packageimg'),$imageName);
        $myfile = 'backend/packageimg/'.$imageName;

        $package = new Package;
        $package->name = $request->name;
        $package->photo = $myfile;
        $package->price = $request->price;

        $package->save();

        //redirect
        return redirect()->route('packages.index');
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
        $package = Package::find($id);
        return view('backend.packages.edit',compact('package'));
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
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'price' => 'required'
        ]);

        if ($request->hasFile('photo')){
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/packageimg'),$imageName);
        $myfile = 'backend/packageimg/'.$imageName;

        unlink($request->oldphoto);

        }else{
            $myfile = $request->oldphoto;
        }

        $package = Package::find($id);
        $package->name = $request->name;
        $package->photo = $myfile;
        $package->price = $request->price;

        $package->save();

        //redirect
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        unlink($package->photo);

        //redirect
        return redirect()->route('packages.index');
    }
}
