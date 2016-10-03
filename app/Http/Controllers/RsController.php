<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\aplikasi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect; 
use DB;

class RsController extends Controller
{
    function infodr(){
    	return view('rs.infodr');

    }

    public function pemasukan()
    {
        return view('data.masuk');
    }
    
    public function insertdatakamar() {

        $data  = array(
             'class' => Input::get('class'),
             'nama_kamar' => Input::get('nama_kamar'),
             'jml_lantai' => Input::get('jml_lantai'),
         );
        DB::table('data_kamar')->insert($data);
        return Redirect::to('/data/kamar')->with('data_kamar',$data);
    }

    public function showroom(){
    	$data = DB::table('data_kamar')->get();
    	return view('rs.showroom')->with('data_kamar',$data);
    }
    public function hapus($id) {
        DB::table('dt_masuk')->where('id','=',$id)->delete();
        return Redirect::to('/in')->with('message','berhasil menghapus data');

    }

    public function pengeluaran()
    {
        return view('data.keluar');
    }
     public function laporanin()
     {
        $data = DB::table('dt_masuk')->get();
        return view('laporan.in')->with('dt_masuk',$data);
     }
}
