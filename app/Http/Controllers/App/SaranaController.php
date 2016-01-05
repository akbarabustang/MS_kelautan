<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SubSarana;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['sarana'] = SubSarana::paginate(10);
        return view('app.master.sarana', $data);
    }

    public function getTambah(Request $request)
    {
        $data['sarana'] = SubSarana::paginate(10);
        $dt = new SubSarana;
        $dt->nama = $request->nama;
        $dt->jenis = $request->jenis;
        $dt->save();
        return redirect()->route('sarana', $data);
    }

    public function getHapus($id){

        $val = explode(",", $id);

        foreach ($val as $value) {
            SubSarana::where('id', $value)->delete();            
        }
        return redirect()->route('sarana');
    }
}
