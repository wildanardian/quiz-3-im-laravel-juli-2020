<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PerusahaanController extends Controller
{
    public function index(){
        $proyek = DB::table('proyek')->get();
        // dd($proyek);
        return view('layouts.master', compact('proyek'));   
    }

    public function create(Request $request){
        
        $request->validate([
            'nama_proyek' => 'required|unique:proyek',
            'deskripsi_proyek' => 'required'
        ]);

        $query = DB::table('proyek')->insert(
            ['nama_proyek' => $request["nama_proyek"], 'deskripsi_proyek' => $request["deskripsi_proyek"]]
        );

        return redirect('/proyek')->with('success', 'Proyek berhasil disimpan');
    }

    public function edit($id){
        $proyek = DB::table('proyek')->where('id', $id)->first();
        // dd($pertanyaanSatu);
        return view('layouts.edit', compact('proyek'));
    }

    public function update($id, Request $request){
        $request->validate([
            'nama_proyek' => 'required|unique:proyek',
            'deskripsi_proyek' => 'required'
        ]);

        $query = DB::table('proyek')
              ->where('id', $id)
              ->update([
                  'nama_proyek' => $request['nama_proyek'],
                  'deskripsi_proyek' => $request['deskripsi_proyek']
              ]);

        return redirect('/proyek')->with('success', 'Berhasil Update proyek');
    }

    public function destroy($id){
        DB::table('proyek')->where('id', $id)->delete();
        // DB::table('pertanyaan')->truncate();
        return redirect('/proyek')->with('success', 'proyek berhasil dihapus');
    }
}
