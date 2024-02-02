<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
public function index() {
    return view('home');
    }

    public function datakaryawan() {
        return view('datakaryawan');
    }

    public function formkaryawan() {
        return view('formkaryawan');
    }

    public function addkaryawan(Request $request){
        $nama = $request->nama;
        $telpon = $request->telpon;
        $alamat = $request->alamat;

        Karyawan::addkaryawan($nama, $telpon, $alamat);
        $pesan = "Data telah ditambahkan !";
        return redirect ('/datakaryawan')->with("pesan", $pesan);
    }

    public function starter(){
        return view('starter');
    }

    public function about() {
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function admin(){
        return view('admin');
    }
}
