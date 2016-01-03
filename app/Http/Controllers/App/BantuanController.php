<?php

namespace App\Http\Controllers\App;

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
        $data['bantuan'] = Bantuan::paginate(10);
        return view('app.master.bantuan', $data);
    }

    public function getTambah(Request $request)
    {
        //  $data = $request->only(['nama', 'jenis']);
        // Bantuan::create($data);

        $data['bantuan'] = Bantuan::paginate(10);
        $dt = new Bantuan;
        $dt->nama = $request->nama;
        $dt->save();
        return redirect()->route('bantuan', $data);
    }

    public function getHapus(Request $r, $id){
        Bantuan::where('id', $id)->delete();
        $r->session()->flash('success', 'Berhasil menghapus data');
        return redirect()->route('bantuan');
    }

}
