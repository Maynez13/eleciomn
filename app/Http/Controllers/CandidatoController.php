<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidato;
class CandidatoController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$candidatos = Candidato::all();
return view('candidato/list', compact('candidatos'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('candidato/create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{

$validacion = $request->validate([
'nombrecompleto' => 'required|max:200',
'foto' => 'required|max:200',
'sexo' => 'required|max:2',
'perfil' => 'required|max:200',
]);

$candidato = Candidato::create($validacion);
return redirect('candidato')->with('success',
$candidato. ' guardado satisfactoriamente ...');
}
/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$casilla = Candidato::find($id);
return view('candidato/edit',
compact('candidato'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$validacion = $request->validate([
'ubicacion' => 'required|max:100',
]);
Candidato::whereId($id)->update($validacion);
return redirect('candidato')
->with('success', 'Actualizado correctamente...');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$candidato = Candidato::find($id);
$candidato->delete();
return redirect('candidato');
}
} //--- end class

