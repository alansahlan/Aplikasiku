<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use App\Http\Requests;
use App\aplikasi;
use Illuminate\Support\Facades\Input;
use DB;

class DataController extends Controller
{
    public function pemasukan()
    {
        return view('data.masuk');
    }
    
    public function insert() {

        $data  = array(
             'uang_masuk' => Input::get('uang_masuk'),
             'tgl_terima' => Input::get('tgl_terima'),
             'yg_menerima' => Input::get('yg_menerima'),
             'yg_menyerahkan' => Input::get('yg_menyerahkan'),
         );
        DB::table('dt_masuk')->insert($data);
        return Redirect::to('/masuk')->with('message','Data Berhasil ditambahkan');
    }

    public function hapus($id) {
        DB::table('dt_masuk')->where('id','=',$id)->delete();
        return Redirect::to('/masuk')->with('message','berhasil menghapus data');

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
