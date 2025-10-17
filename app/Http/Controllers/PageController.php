<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function sejarah()
    {
        return view('pages.sejarah');
    }
    public function artikel()
    {
        return view('pages.artikel');
    }
    public function foto_gallery()
    {
        return view('pages.foto-gallery');
    }
    public function produk()
    {
        return view('pages.produk');
    }
    public function poster()
    {
        return view('pages.poster');
    }
}
