<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bantuan, App\JenisUsaha, App\Sarana;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getIndex()
    {
        $data['bantuan'] = Bantuan::paginate(20);
        $data['jenisusaha'] = JenisUsaha::paginate(20);
        $data['kepemilikansarana'] = KepemilikanSarana::where('parent_id', 0)->paginate(20);
        return view('admin.master-data', $data);
    }

    public function getTambah(Request $request)
    {
        //  $data = $request->only(['nama', 'jenis']);
        // Bantuan::create($data);

        $data['bantuan'] = Bantuan::paginate(20);
        $data['jenisusaha'] = JenisUsaha::paginate(20);
        $data['kepemilikansarana'] = KepemilikanSarana::where('parent_id', 0)->paginate(20);
        $dt = new Bantuan;
        $dt->nama = $request->nama;
        $dt->jenis = $request->jenis;
        $dt->save();
        return redirect()->route('master', $data);
    }

    public function getHapus(Request $r, $id){
        Bantuan::where('id', $id)->delete();
        $r->session()->flash('success', 'Berhasil menghapus data');
        return redirect()->route('master');
    }
}
