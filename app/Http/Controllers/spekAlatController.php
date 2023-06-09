<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpekAlat;
use App\Models\Alat;

class spekalatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['allDataSpekAlat']=SpekAlat::with('alat')->get();
        return view('admin.spekalat.spekalat_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alat =Alat::all();
        return view('admin.spekalat.spekalat_add', compact('alat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData= $request->validate([
               'KodeAlat'=> 'required',
               'alat_id'=> 'required',
               'Brand'=> 'required', 
               'Model'=> 'required',
               'NoSeri'=> 'required' 
           ]);
         
           $data = new SpekAlat();
           $data->KodeAlat=$request->KodeAlat;
           $data->alat_id=$request->alat_id;
           $data->Brand=$request->Brand;
           $data->Model=$request->Model;
           $data->NoSeri=$request->NoSeri;
           
        
           $data->save();
       
       
           
           return redirect()->route('spekalat.view')->with('info','Tambah Alat berhasil');
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
        $alat= Alat::all();
        $editData= SpekAlat::with('alat')->findorfail($id);
        return view('admin.spekalat.spekalat_edit', compact('editData','alat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData= $request->validate([
               'KodeAlat' => 'required', 
               'alat_id'=> 'required',
               'Brand'=> 'required',
               'Model' => 'required',
               'NoSeri' => 'required'        
     
           ]);
         
           $data=SpekAlat::find($id);
           $data->KodeAlat=$request->KodeAlat;
           $data->alat_id=$request->alat_id;
           $data->Brand=$request->Brand;
           $data->Model=$request->Model;
           $data->NoSeri=$request->NoSeri;
           
        
           $data->save();
       
       
           
           return redirect()->route('AlatPesan_view')->with('info','Tambah Alat Pesan Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete($id)
    {
        $deleteData= SpekAlat::find($id);
        $deleteData->delete();

        return redirect()->route('spekalat.view')->with('info','Delete Data berhasil');
    }
}
