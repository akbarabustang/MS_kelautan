<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['sarana'] = Sarana::paginate(10);
        return view('app.master.sarana', $data);
    }

    public function getTambah(Request $request)
    {
        $data['sarana'] = Sarana::paginate(10);
        $dt = new Sarana;
        $dt->nama = $request->nama;
        $dt->jenis = $request->jenis;
        $dt->save();
        return redirect()->route('sarana', $data);
    }

    public function getHapus($id){

        $val = explode(",", $id);

        foreach ($val as $value) {
            Sarana::where('id', $value)->delete();            
        }
        return redirect()->route('sarana');
    }
}
