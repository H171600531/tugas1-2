<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listGaleri=Galeri::all(); //select*from galeri

    //blade
    return view('galeri.index', compact('listGaleri'));
    //return view(view: 'galeri.index')->with('data',$listgaleri);
	}
	public function show($id){

		//$Galeri=Galeri::where('id',$id)->first();
		$listGaleri=Galeri::find($id);

		return view ('galeri.show', compact('listGaleri'));
	}

	public function create(){
		return view('galeri.create');
	}
}