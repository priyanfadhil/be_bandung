<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\GalleryWisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create Wisata";
        return view('wisata.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'address' => 'required|max:255',
            'time' => 'required|max:255',
            'phone' => 'required|numeric|min:10',
            'background' => 'required|max:255',
            'facility' => 'required|max:255'
        ]);
        
        Wisata::create($validatedData);

        return redirect('/')->with('success', 'Berhasil Menambahkan Wisata!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Wisata::find($id);
        $title = "Detail Wisata";
        if($data){
            $gallery = GalleryWisata::where('id_wisata', $id)->get();
            return view('wisata.detail', compact('data', 'gallery', 'title'));
        }else{
            return abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.update', [
            'title' => 'Edit Obat',
            'method' => 'PUT',
            'action' => "wisata/$id",
            'wisata' => $wisata,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);
        $wisata -> name = $request->name;
        $wisata -> description = $request->description;
        $wisata -> address = $request->address;
        $wisata -> time = $request->time;
        $wisata -> phone = $request->phone;
        $wisata -> background = $request->background;
        $wisata -> facility = $request->facility;
        $wisata->save();
        return redirect('/')->with('success', 'Berhasil Update Wisata!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata= Wisata::find($id);
        $wisata->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus!');
    }
}