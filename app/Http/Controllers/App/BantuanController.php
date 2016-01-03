<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bantuan;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getIndex()
    {
        $data['bantuan'] = Bantuan::paginate(20);
        return view('app.master.bantuan', $data);
    }

    public function getTambah(Request $request)
    {
         $data = $request->only(['nama']);
        Bantuan::create($data);

        // $data['bantuan'] = Bantuan::paginate(20);
        // $dt = new Bantuan;
        // $dt->nama = $request->nama;
        // $dt->save();
        // return redirect()->route('master', $data);
    }

    public function getHapus(Request $r, $id){
        Bantuan::where('id', $id)->delete();
        $r->session()->flash('success', 'Berhasil menghapus data');
        return redirect()->route('master');
    }
}
