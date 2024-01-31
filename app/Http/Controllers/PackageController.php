<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::get();
        return view('adminpackage', compact('package'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'time' => 'required'
        ]);

        Package::create($request->all());

        return redirect('/adminpackage')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'package-name' => 'required',
            'package-description' => 'required',
            'package-price' => 'required',
            'package-time' => 'required'
        ]);
        $id =  $request->get('package-id');
        $package = Package::find($id);
        if ($package == null) {
            return redirect('/adminpackage')->with('success', 'Paket tidak ditemukan');
        }
        $package->name = $request->get("package-name");
        $package->description = $request->get("package-description");
        $package->price = $request->get("package-price");
        $package->time = $request->get("package-time");
        $package->save();
        return redirect('/adminpackage')->with('success', 'Data Berhasil Disimpan');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::destroy($id);
        return redirect('/adminpackage')->with('success', 'Data Berhasil Dihapus');
    }
}
