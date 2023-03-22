<?php

namespace App\Http\Controllers;

use App\Models\Produs;
use App\Http\Requests\StoreProdusRequest;
use App\Http\Requests\UpdateProdusRequest;
use Spatie\Image\Image;

class ProdusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produse = Produs::get();
        return view('admin.index',[
            'produse'=>$produse
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdusRequest $request)
    {
        $produs = new Produs();
            $produs->nume = $request->nume;
            $produs->pret = $request->pret;
            $produs->nota = $request->nota;
            /** Pentru salvarea imaginii **/
            $produs->img = time().time().'.'
                .$request->file('img')->getClientOriginalExtension();
        $request->file('img')->move('imagini/', time().time().'.'
            .$request->file('img')->getClientOriginalExtension());
        $produs->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produs $produs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produs=Produs::findOrFail($id);
        return view ('admin.edit', ['admin'=>$produs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdusRequest $request, Produs $id)
    {
        $produs=Produs::findOrFail($id);
        unlink('imagini/'.$produs->img);
        $produs->nume=$request;
        $produs->img = time().time().'.'
                .$request->file('img')->getClientOriginalExtension();
        $produs->pret=$request->pret;
        $produs->pret=$request->nota;
        $request->file('img')->move('imagini/', time().time().'.'
            .$request->file('img')->getClientOriginalExtension());
            $produs->update();
            return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produs $produs)
    {
        $produs=Produs::findOrFail($id);
        unlink('imagini/'.$produs->img);
        $produs->delete();
        return redirect()->route('admin.index');
    }
}
