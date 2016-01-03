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

}
