<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HasilController extends Controller
{
    public function index(){
        $hasil = DB::table('hasils')->get();
        return view('hasil',['hasil' => $hasil]);
    }
    public function data(){
        $hasil = DB::table('hasils')->get();
        return view('data',['hasil' => $hasil]);
    }
    public function create(){
        return view('form-input');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'nama_hasil' => 'required|min:3|max:60',
            'tanggal_panen' => 'required',
            'jumlah' => 'required',
            'asal_sawah' => 'required',
        ]);
        Hasil::create($validateData);
        return redirect('/hasils')->with('pesan', "Data telah berhasil ditambahkan");
    }

    public function hapus($id)
    {
        DB::table('hasils')->where('id',$id)->delete();
        return redirect('/hasils')->with('pesan', "Data telah berhasil dihapus");
    }

    public function edit($id)
    {
        $hasils = DB::table('hasils')->where('id',$id)->get();
        return view('edit',['hasils' => $hasils]);
}

public function update(Request $request)
{
	DB::table('hasils')->where('id',$request->id)->update([
        'nama_hasil' => $request->nama_hasil,
        'tanggal_panen' => $request->tanggal_panen,
        'jumlah' => $request->jumlah,
        'asal_sawah' => $request->asal_sawah,

	]);

	return redirect('/hasils')->with('pesan', "Data telah berhasil diubah");
}
public function cari (Request $request) {
    $cari = $request->cari;
        $result = DB::table("hasils")->where('nama_hasil', 'like', "%".$cari."%")->paginate();
        return view('/hasils', ['hasils' => $result]);
    }

}
