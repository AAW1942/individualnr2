<?php

namespace App\Http\Controllers;

use App\Models\Produs;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $produse=Produs::all();
        return view('produse.index',[
            'produse'=>$produse
        ]);
    }
}
