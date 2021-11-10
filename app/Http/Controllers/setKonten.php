<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
use App\admin;
use App\pariwisata;

class setKonten extends Controller
{
    public function tampilAddKonten()
    {
        return view('website.addKonten');
    }

    public function addKonten(request $request)
    {

        $file = $request->file('image');
        $namaFile = '../../assets/img/blog/'.rand()."_".$file->getClientOriginalName();
        $extensiFile = $file->getClientOriginalExtension();
        $ukuranFile = (int)($file->getSize());

        $tujuanFile = 'assets/img/blog/';

        if($extensiFile == 'jpg'|| $extensiFile == 'jpeg'|| $extensiFile == 'png'){
            if($ukuranFile <= 2000000){
                $file->move($tujuanFile, $namaFile);

                $namahalaman = rand().'_'.substr(strtolower(str_replace(' ', '_', $request->namaTempat)), 0, 10);
                $konten = new pariwisata;
                $konten->author_id = $request->authorId;
                $konten->nama_tempat = $request->namaTempat;
                $konten->alamat_tempat = $request->alamatTempat;
                $konten->katasingkat_tempat = substr($request->deskripsiTempat, 0, 150);
                $konten->deskripsi_tempat = $request->deskripsiTempat;
                $konten->waktu_buka_tutup = $request->waktuBukaTutup;
                $konten->image = $namaFile;
                $konten->created_at = \Carbon\Carbon::now();
                $konten->updated_at = \Carbon\Carbon::now();
                $konten->save();

                $buat = fopen('assets/file/'.$namahalaman.".blade.php", 'w');
                fwrite($buat, "@extends('layout_user.mainpost')
                
                @section('header1','$request->namaTempat')
                @section('header2','$request->alamatTempat')
                
                
                @section('mainimage')
                <img src='assets/img/blog/$namaFile' alt=>
                
                @section('tittle','$kataSingkat')
                
                @endsection
                
                @section('text')
                <p>
                $request->deskripsiTempat
                <br>
                $request->WaktuBukaTutup
                
                </p>
                
                @endsection");

                fclose($buat);
    
                session(['berhasilTambahKonten' => 'Konten Berhasil Ditambahkan']);
                return redirect('plusK');
            }
            else{
                session(['extensiSalah' => 'Upload File maximal 2 Mb']);
                return redirect('plusK');
            }
        }
        else{
            session(['extensiSalah' => 'Upload File dengan Extensi .jpg .jpeg atau .png']);
            return redirect('plusK');
        }
        
    }

    public function hapusAkun(request $request)
    {
        $idnya = $request->idAdmin;
        session(['berhasilHapusAdmin' => 'Data Berhasil Dihapus']);
        $adm = admin::find($idnya);
        $adm->delete();
        return redirect('admin');
    }

    public function hapusKonten(request $request)
    {
        $id = $request->idKonten;
        $gambar = $request->imgKonten;
        $halaman = $request->halamanKonten;
        session(['berhasilHapusKonten' => 'Data Berhasil Dihapus']);
        unlink(public_path('assets/img/blog/'.$gambar));

        File::delete(public_path("assets\file".$halaman));
        $konten = pariwisata::find($id);
        $konten->delete();
        return redirect('listK');
    }

    public function tampilEditKonten(request $request)
    {
        $tempatKonten = (int)$request->idKonten;
        $pariwisata = pariwisata::all();
        $konten = $pariwisata[$tempatKonten];
        return view('website.editKonten', compact('konten'));
    }

    public function editKonten(request $request)
    {
        $halamanLama = $request->halamanLama;
        $idKonten = $request->idKonten;
        $konten = pariwisata::find($idKonten);
        if(!empty($request->imgBaru))
        {
            $imgLama = $request->imgLama;

            unlink(public_path('assets/img/blog/'.$imgLama));
            
            $file = $request->file('image');
            $namaFile = "../../assets/img/blog/".rand()."_".$file->getClientOriginalName();
            $extensiFile = $file->getClientOriginalExtension();
            $ukuranFile = (int)($file->getSize());

            $tujuanFile = 'assets\img\blog';

            if($extensiFile == 'jpg'|| $extensiFile == 'jpeg'|| $extensiFile == 'png'){
                if($ukuranFile <= 2000000){
                    $file->move($tujuanFile, $namaFile);
                    $konten->image = $namaFile;
                }
                else{
                    session(['extensiSalah' => 'Upload File maximal 2 Mb']);
                    return redirect('plusK');
                }
            }
            else{
                session(['extensiSalah' => 'Upload File dengan Extensi .jpg .jpeg atau .png']);
                return redirect('plusK');
            }

        }

        // $namaHalaman = rand().'_'.substr(strtolower(str_replace(' ', '_', $request->namaTempat)), 0, 10);
        $konten->nama_tempat = $request->namaTempat;
        $konten->alamat_tempat = $request->alamatTempat;
        $konten->katasingkat_tempat = substr($request->deskripsiTempat, 0, 150);
        $konten->deskripsi_tempat = $request->deskripsiTempat;
        $konten->waktu_buka_tutup = $request->waktuBukaTutup;
        $konten->halaman = $halamanLama;
        $konten->updated_at = \Carbon\Carbon::now();
        $konten->save();

        // File::delete('resources/website/'.$halamanLama);

        // $ubah = fopen('resources/website/'.$namaHalaman.".blade.php", "w");
        // fwrite($ubah, "@extends('layout_user.mainpost')

        // @section('header1','$request->namaTempat')
        // @section('header2','$request->alamatTempat')
        
        
        // @section('mainimage')
        // <img src='assets/img/blog/$namaFIle' alt=>
        
        // @section('tittle','$kataSingkat')
        
        // @endsection
        
        // @section('text')
        // <p>
        // $request->deskripsiTempat
        // <br>
        // $request->WaktuBukaTutup
        
        // </p>
        
        // @endsection");
        // fclose($ubah);

        // session(['berhasilHapusKonten' => 'Data Konten Berhasil Diubah']);
        return redirect('listK');
    }
}
