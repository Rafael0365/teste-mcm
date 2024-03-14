<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function show(){
        $produtos = produto::get();
        return view('produto',['produtos' => $produtos]);
    }
    
    public function index(){
        return view('cadastro-produto');
    }

    public function create(Request $request){
        $request->validate(['descricao'=>'required','categoria'=>'required','preco'=>'required','qtd'=>'required']);
        $produto = new produto();
        $produto -> descricao = $request->input('descricao');
        $produto -> categoria = $request->input('categoria');
        $produto -> preco = $request->input('preco');
        $produto -> qtd = $request->input('qtd');
        $produto -> save();
        return redirect()->route('produto.lista');

    }

    public function edit($id){
        $produto = produto::find($id);
        return view('cadastro-produto',['produto'=>$produto]);

    }

    public function update(Request $request,$id){
        $request->validate(['descricao'=>'required','categoria'=>'required','preco'=>'required','qtd'=>'required']);
        $produto = produto::find($id);
        
        $produto -> descricao = $request->input('descricao');
        $produto -> categoria = $request->input('categoria');
        $produto -> preco = $request->input('preco');
        $produto -> qtd = $request->input('qtd');
        
        $produto->save();
        return redirect()->route('produto.lista');
    }

    public function delete($id){
        $produto = produto::find($id);
        //return print($produto);
        $produto->delete();
        
        return redirect()->route('produto.lista');

    }
}
