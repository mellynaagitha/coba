<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\admin;
use App\pariwisata;

class tampilAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $req)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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

    public function admin()
    {
        $admins = admin::all();
        return view('website.admin', compact('admins'));
    }

    public function listKonten()
    {
        $pariwisatas = pariwisata::all();
        return view('website.listKonten', compact('pariwisatas'));
    }

    public function tampilSetAkun()
    {
        $id = session('idAdmin');
        $data = admin::find($id);
        return view('website.pengaturanAkun', compact('data'));
    }

    public function setAkun(request $request)
    {
        $id = session('idAdmin');
        $data = admin::find($id);

        if(empty($request->password)){
            $data->name = $request->nama;
            $data->email = $request->email;
            $data->updated_at = \Carbon\Carbon::now();
            $data->save();

            session(['ubahAdmin' => 'Berhasil Ubah Data!']);
            return redirect('admin');
        }
        else{
            $data->name = $request->nama;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->updated_at = \Carbon\Carbon::now();
            $data->save();

            return redirect('logout');
        }
    }

}
