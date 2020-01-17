<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        $contatos = Contato::all();
        return view('contato.index', compact('contatos'));
    }


    public function create()
    {
        return view('contato.form');
    }


    public function store(Request $request)
    {
        /**
        $path = $request->file('arquivo')->store('imagens','public');

        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->cpf = $request->input('cpf');
        $contato->data_nascimento = $request->input('data_nascimento');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->arquivo = $path;
        $contato->save;

        return redirect('/contatos');
        */

        try{

            Contato::create($request->all());
            flash('Contato salvo com sucesso')->success();

            }catch(\Exception $erro){

            flash('Erro ao salvar contato')->error();

            return redirect()->back();

        }
            return redirect ('/contatos');

    }


    public function edit($id)
    {
        $contato=Contato::find($id);

        return view('contato.form',compact('contato'));
    }


    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);

        $contato->update($request->all());

        return redirect ('/contatos');
    }


    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();

        flash('Contato excluido com sucesso')->success();

        return "deletou";
    }
}
