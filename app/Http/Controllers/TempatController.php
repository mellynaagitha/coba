<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pariwisata;

class TempatController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pariwisata = DB::table('pariwisatas')->simplePaginate(6);		

    	// mengirim data pegawai ke view index
    	return view('website.index',['pariwisatas' => $pariwisata]);		
    }	
	
	public function search(Request $request)
	{
	  // menangkap data pencarian
	  $keyword = $request->search;
   
		  // mengambil data dari table pegawai sesuai pencarian data
	  $pariwisatas = DB::table('pariwisatas')->where('nama_tempat','like',"%".$keyword."%")->paginate(5);
	  
   
		  // mengirim data pegawai ke view index
	  return view('website.index',compact('pariwisatas'))->with('i', (request()->input('page', 1) - 1) * 5);
   
	}	
}
