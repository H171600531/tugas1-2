<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriBerita=KategoriBerita::all(); //select*from kategori_artikel

    //blade
    return view('kategori_berita.index', compact('listKategoriBerita'));
    //return view(view: 'kategori_berita.index')->with('data',$listKategoriBerita);
}
}