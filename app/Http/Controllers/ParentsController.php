<?php

namespace App\Http\Controllers;


use App\Http\Requests\PanrentRequest;
//use App\Models\User;
use App\Models\parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.parents.list',[
            'parents' => parents::latest('updated_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parents.parents',[
            'parent' => new parents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PanrentRequest $request)
    {
        parents::create($request->validated());
        return redirect()->route('cuidador.index')->with('status', 'cuidador creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.parents.edit',[
            'parent' => parents::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PanrentRequest $request,$id)
    {

        $parents = parents::findOrFail($id);

        if($parents->update($request->validated()) ) {
            return redirect()->route('cuidador.index')->with('status', 'Cuidador actualizado con exito');
        }else{
            return redirect()->route('cuidador.index')->with('status', 'Error al actualizar cuidador');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
