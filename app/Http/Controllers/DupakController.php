<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Dupak;


class DupakController extends Controller
{
    public function index(){
        return  view('dupak.index');
    }

    public function create(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'username' => '',
            'email' => 'required',
            'tempat-lahir'=>'required',
            'tanggal-lahir'=>'required',
            'jk'=>'required',
            'nip'=>'required',
            'no-karpeg'=>'required',
            'pendidikan'=>'required',
            'pangkat'=>'required',
            'golongan'=>'required',
            'ruang'=>'required',
            'tamat-pangkat'=>'required',
            'jabatan'=>'required',
            'tamat-jabatan'=>'required',
            'gol-baru'=>'required',
            'unit-kerja'=>'required',
            'satuan-kerja'=>'required',
            'sk-pangkat-terakhir'=>'required',
            'sk-pak-terakhir'=>'required',
            'skp-terakhir'=>'required',
            'rekomendasi'=>'required',
            'pesan-tambahan'=>'',
            'periode-pak'=>'required'
        ]);

        Dupak::create($data);

    }
}