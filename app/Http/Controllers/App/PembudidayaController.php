<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User, App\Kelompok;

class PembudidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['pembudidaya'] = User::where('profesi','Pembudidaya')->get();
        return view ('app.pembudidaya.index',$data);
    }

     public function getTambah(Request $request)
    {
        $data['jabatan'] = Jabatan::paginate(10);
        $dt = new Jabatan;
        $dt->nama = $request->nama;
        $dt->save();
        return redirect()->route('jabatan', $data);
    }

    public function postSimpan()
    {

    }

    public function getEdit()
    {

    }

    public function postUpdate()
    {

    }

    public function getHapus(Request $r, $id)
    {
        $val = explode(",", $id);

        foreach ($val as $value) {
            User::where('id', $value)->delete();            
        }
        $r->session()->flash('success', 'Data terhapus');
        return redirect()->route('pembudidaya');
    }

    
}
