<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\calon;
use App\User;
use Auth;

class KotakSuaraController extends Controller
{
    //\

        public function __construct()
    {
        $this->middleware('auth');
    }

    public function voting()
    {
    	# code...
    	$calon = DB::table('calon_kades')->get();
    	$suara = DB::table('kotak_suara')->get();

    	return view('kotakSuara.vote', ['calon' => $calon, 'suara' => $suara]);
    }

     public function vote(Request $request)
    {

    	$pilihan=Calon::find($request->id);
        $jml=Calon::where('id', $request->id)->value('jumlah_suara');
        // dd($request);
        $pilihan->jumlah_suara=$jml+1;
        $pilihan->save();
        $pml=User::find($request->suara);
        $pml->surat_suara=1;
        $pml->save();


        return view('Home');
    	// DB::table('kotak_suara')->where('no_urut',$request->no_urut)->update([
     //        'jumlah_suara' => $suara+1,
            
     //    ]);

     //    return redirect('/home');
    }
}
