<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect; 

use DB;

class SapaController extends Controller{
	public function index(){
		$dt_masuk = DB::select('select* from dt_masuk ORDER BY tgl_terima DESC');

		return view('data.masuk',['Data masuk' => $dt_masuk]);
	}
	public function insert(){
		DB::insert('insert into dt_masuk (dt_masuk) values(?) ', [$_POST['content']]);
		return Redirect::to('database');
	}

	public function delete($id){
		$data['id'] = $id;
		DB::delete('delete from sapa WHERE id = ?',[$data['id']]);
		return Redirect::to('database');
	}
}