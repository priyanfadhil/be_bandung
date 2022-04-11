<?php

namespace App\Http\Controllers;
use App\Models\GalleryWisata;
use App\Models\Wisata;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::query()->orderBy('name', 'asc')->limit(5)->get();
        $title = "Dashboard";
        return view('home', compact('wisata', 'title'));
    }
}
