<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{

	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriPengumuman=KategoriPengumuman::all(); //select*from kategori_pengumuman

    //blade
    return view('kategori_pengumuman.index', compact('listKategoriPengumuman'));
    //return view(view: 'kategori_pengumuman.index')->with('data',$listKategoriPengumuman);
	}
	public function show($id){

		//$KategoriPengumuman=KategoriPengumuman::where('id',$id)->first();
		$listKategoriPengumuman=KategoriPengumuman::find($id);

		return view ('kategori_pengumuman.show', compact('listKategoriPengumuman'));
	}

	public function create(){
		return view('kategori_pengumuman.create');
	}
}
