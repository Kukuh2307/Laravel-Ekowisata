<?php

namespace App\Http\Controllers;

use App\Models\FotoSection;
use App\Models\HeroSection;
use App\Models\MitraSection;
use App\Models\PaketSection;
use Illuminate\Http\Request;
use App\Models\KontakSection;
use App\Models\ProdukSection;
use App\Models\ArtikelSection;
use App\Models\SejarahSection;
use App\Models\DokumentasiSection;

class PageController extends Controller
{
    public function index()
    {
        $heroSlides = HeroSection::all();
        $mitraSections = MitraSection::all();
        $dokumentasiSections = DokumentasiSection::orderBy('created_at', 'desc')->get();
        $paketSections = PaketSection::orderBy('created_at', 'desc')->get();
        $kontakSection = KontakSection::all()->first();

        return view('pages.index', compact('heroSlides', 'mitraSections', 'dokumentasiSections', 'kontakSection', 'paketSections'));
    }
    public function sejarah()
    {
        $sejarahSection = SejarahSection::latest()->first();

        return view('pages.sejarah', compact('sejarahSection'));
    }
    public function artikel()
    {
        $artikelSections = ArtikelSection::orderBy('created_at', 'desc')->get();

        return view('pages.artikel', compact('artikelSections'));
    }
    public function foto_gallery()
    {
        $fotoSections = FotoSection::orderBy('created_at', 'desc')->get();
        
        return view('pages.foto-gallery', compact('fotoSections'));
    }
    public function produk()
    {
        $produkSections = ProdukSection::orderBy('created_at', 'desc')->get();
        
        return view('pages.produk', compact('produkSections'));
    }
    public function poster()
    {
        return view('pages.poster');
    }
}
