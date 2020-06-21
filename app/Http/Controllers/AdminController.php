<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tambahCalon()
    {
    	# code...

    	return view('admin.tambah');
    }

    public function upload(Request $request)
    {
        DB::table('calon_kades')->insert([
            'no_urut' => $request->nomor,
            'nama_calon' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            'foto' => $request->file->getClientOriginalName(),
        ]);
        $file = $request->file;
        $tujuan_upload = 'img/foto_kades';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        return redirect('/admin/home');
    }

     public function list()
    {
        $calon = DB::table('calon_kades')->get();

        return view('admin.list', ['calon' => $calon]);
    }

     public function edit($id)
    {
        $calon = DB::table('calon_kades')->where('id',$id)->get();

        return view('admin.edit', ['calon' => $calon]);
    }

    public function update(Request $request)
    {
        DB::table('calon_kades')->where('id',$request->id)->update([
            'no_urut' => $request->nomor,
            'nama_calon' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tanggalLahir,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'organisasi' => $request->organisasi,
            'keterangan' => $request->keterangan,
            
        ]);
        return redirect('/admin/home');
    }

    public function details($id)
    {
        $calon = DB::table('calon_kades')->where('id',$id)->get();

        return view('admin.details', ['calon' => $calon]);
    }

    public function hapus($id)
    {
        
        $file = DB::table('calon_kades')->where('id',$id)->first();
        File::delete('img/foto_kades/'.$file->foto);
        DB::table('calon_kades')->where('id',$id)->delete();

        return redirect('/admin/home');
    }

}
