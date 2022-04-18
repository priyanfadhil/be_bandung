<?php

namespace App\Http\Controllers;

use App\Models\GalleryKuliner;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
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
        $title = "Create Kuliner";
        return view('kuliner.create', compact('title'));
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
            'background' => 'image|file|max:1024',
            'facility' => 'required|max:255'
        ]);

        if($request->file('background')){
            $validatedData['background'] = $request->file('background')->store('public');
        }
        
        Kuliner::create($validatedData);

        return redirect('/')->with('success', 'Berhasil Menambahkan Kuliner!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kuliner::find($id);
        $title = "Detail kuliner";
        if($data){
            // $gallery = GalleryKuliner::where('id_kuliner', $id)->get();
            return view('kuliner.detail', compact('data', 'title'));
        }else{
            return abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kuliner = Kuliner::find($id);
        return view('kuliner.update', [
            'title' => 'Edit Obat',
            'method' => 'PUT',
            'action' => "kuliner/$id",
            'kuliner' => $kuliner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kuliner = Kuliner::find($id);
        $kuliner -> name = $request->name;
        $kuliner -> description = $request->description;
        $kuliner -> address = $request->address;
        $kuliner -> time = $request->time;
        $kuliner -> phone = $request->phone;
        $kuliner -> background = $request->file('background')->store('public');
        $kuliner -> facility = $request->facility;
        $kuliner->save();
        return redirect('/')->with('success', 'Berhasil Update kuliner!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kuliner= Kuliner::find($id);
        $kuliner->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus!');
    }
}
