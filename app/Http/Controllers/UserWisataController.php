<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserWisata;
use App\Models\User;
use App\Models\Wisata;

class UserWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $UserWisata = Wisata::where("id", auth()->user()->id)->get();
        $UserWisata = UserWisata::with('User', 'Wisata')->latest()->get();

        $title = "Favorit";
        return view('favorit/index', compact('UserWisata', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData['user_id'] =auth()->user()->id;
        $validatedData['wisata_id'] = $request->id;
        
        UserWisata::create($validatedData);

        return redirect('/')->with('success', 'Berhasil Menambahkan Wisata!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
