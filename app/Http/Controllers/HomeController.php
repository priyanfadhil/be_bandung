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

    public function show($id)
    {
        $data = Wisata::find($id);
        $title = "Detail Wisata";
        if($data){
            $gallery = GalleryWisata::where('id_wisata', $id)->get();
            return view('wisata_detail', compact('data', 'gallery', 'title'));
        }else{
            return abort('404');
        }
    }
}
