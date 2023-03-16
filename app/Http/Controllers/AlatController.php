<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['allDataAlat']=Alat::all();
        return view('admin.Alat.alat_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Alat.alat_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData= $request->validate([
               'NamaAlat'=> 'required',    
     
           ]);
         
           $data = new Alat();
           $data->NamaAlat=$request->NamaAlat;
           
        
           $data->save();
       
       
           
           return redirect()->route('alat.view')->with('info','Tambah Alat berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) //string $id
    {
        $editData= Alat::find($id);
        return view('admin.Alat.alat_edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
    {
        $validateData= $request->validate([
                'NamaAlat'=> 'required',

           ]);
         
           $data= Alat::find($id);
           $data->NamaAlat=$request->NamaAlat;
           
        
           $data->save();
       
       
           
           return redirect()->route('alat.view')->with('info','Tambah Alat berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $deleteData= Alat::find($id);
        $deleteData->delete();

        return redirect()->route('alat.view')->with('info','Delete Data berhasil');
    }
}
