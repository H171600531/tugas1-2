<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listPengumuman=Pengumuman::all(); //select*from pengumuman

    //blade
    return view('pengumuman.index', compact('listPengumuman'));
    //return view(view: 'pengumuman.index')->with('data',$listgaleri);
	}
	public function show($id){

		//$Pengumuman=Pengumuman::where('id',$id)->first();
		$listPengumuman=Pengumuman::find($id);

		return view ('pengumuman.show', compact('listPengumuman'));
	}

	public function create(){
		return view('pengumuman.create');
	}
}