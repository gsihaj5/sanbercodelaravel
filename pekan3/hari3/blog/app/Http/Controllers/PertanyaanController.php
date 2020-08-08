<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan') -> get();
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $judulPertanyaan = $request['judul'];
        $isiPertanyaan = $request['isi'];

        $query = DB::table('pertanyaan') -> insert(
            [
                'judul' => $judulPertanyaan,
                'isi' => $isiPertanyaan
            ]

        );
        
        return redirect('/pertanyaan/create') -> with('success', 'post berhasil di simpan');
    }

    public function show($pertanyaan_id) { 
       $post = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first(); 
       return view('pertanyaan.show', compact('post'));
    }

    public function edit($pertanyaan_id) {
       $post = DB::table('pertanyaan')->where('id',$pertanyaan_id)->first(); 
       return view('pertanyaan.edit', compact('post'));
    }

    public function update($pertanyaan_id, Request $request){
        $affected = DB::table('pertanyaan')->where('id', $pertanyaan_id)->update(
            [
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        return redirect("/pertanyaan");
    }

    public function destroy($pertanyaan_id) {
        $query = DB::table('pertanyaan')-> where('id',$pertanyaan_id) ->delete();
        return redirect('/pertanyaan');
    }
}
