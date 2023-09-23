<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\PasienDetail;

class PasienController extends Controller
{
    public function index()
    {
        // $pasien = Pasien::all();
        // return view('pasien.index', ['pasiens'=>$pasien]);
        
        $pasien = Pasien::all();
        // dd($pasien);
        return view ('pasien.index', [
            'pasiens'=>$pasien
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'no_kartu' => 'required',
        //     'alamat' => 'required',
        // ]);
       
        // $pasien = Pasien::create([
        //     'no_kartu' => $request->no_kartu,
        //     'alamat' => $request->alamat,
        // ]);

        // return response()->json(['message' => 'Data berhasil ditambahkan']);

       
        $no_kartu = $request->no_kartu;
        $no_hp = $request->no_hp;
        $alamat = $request->alamat;
        
        $pasienadd = new Pasien;
        $pasienadd->no_kartu = $no_kartu;
        $pasienadd->no_hp = $no_hp;
        $pasienadd->alamat = $alamat;
        $pasienadd->save();

        // return view('pasien.add');
        return view('pasien.index');
    }

    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return response()->json($pasien);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_kartu' => 'required',
            'alamat' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update([
            'no_kartu' => $request->no_kartu,
            'alamat' => $request->alamat,
        ]);

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        // return response()->json(['message' => 'Data berhasil dihapus']);
        // return view('pasien.index');
        return redirect(url('/pasien'));
    }
}
