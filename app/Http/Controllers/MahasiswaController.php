<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact(['mahasiswa']));
        }
        public function create()
        {
        return view('mahasiswa.create');
        }
        public function store(Request $request)
        {
            // dd($request->except(['_token','submit']));
            mahasiswa::create($request->except(['_token','submit']));
            return redirect('/mahasiswa');
        }
        public function edit($id)
        {
            $mahasiswa = Mahasiswa::find($id);
            return view('mahasiswa.edit',compact(['mahasiswa']));
        }
        public function update($id, Request $request)
        {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->update($request->except(['_token','submit']));
            return redirect('/mahasiswa');
        }
        public function destroy($id)
        {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->delete();
            return redirect('/mahasiswa');
        }
}
