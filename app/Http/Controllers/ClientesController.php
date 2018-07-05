<?php

namespace App\Http\Controllers;

use App\clientes;
use App\compras;
use App\usuarios;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

   //Exibi tela de login --OK
    public function index()
    {
        $clientes=clientes::get();
        return view('home',compact('clientes'));
    }

    //Exibir a tela inicial depois do login --OK
    public function home()
    {   $clientes=clientes::get();
        $compras=compras::get();
        return view('home',compact('clientes','compras'));
    }

    //Exibi tela de inserir compra --OK
    public function telaInserirCompra()
    {   
        return view('telaInserirCompra');
    }

    //Cadastra cliente --OK
    public function store(Request $request)
    {
        $cliente=clientes::where('cpf',$request->cpf)->get();     
        if(count($cliente)==1)
        {   
            return redirect('home')->with('erro','CPF já cadastrado!');
        }
        
        else
        {
            $cliente1=new clientes;
            $cliente1->nome=$request->nome;
            $cliente1->cpf=$request->cpf;
            $cliente1->save();

            return redirect('home')->with('sucesso','Cliente cadastrado com sucesso!');
        }
        
        
    }

    public function InserirCompra(Request $request, $id)
    {
        
        $compra=new compras;
        $compra->valor=$request->valor;
        $compra->id_cliente=$id;
        $compra->save();
        
        return redirect('home')->with('compra','Compra inserida com sucesso!');  
        
    }

    //Editar cliente no banco de dados
    public function update(Request $request, $id)
    {
        $existe=clientes::where('cpf',$request->cpf)->count();
        $cliente=clientes::find($id);
        $idCliente=$cliente->id_cliente;

        /* print($request->cpf);
        exit(); */
       
        if($existe==1)
        {   
            return redirect('home')->with('cpf','CPF já cadastrado!');
        }
        else
        {   
            $client=clientes::find($id);
            $client->nome=$request->nome;
            $client->cpf=$request->cpf;
           
            $client->save();
            $clientes=clientes::get();
        
            return redirect('home')->with('editar','Usuário(a) editado(a) com sucesso!');
        }

    }

    //Excluir cliente
    public function destroy($id)
    {
        clientes::destroy($id);

        return redirect('home')->with('excluir','Usuário(a) excluído(a) com sucesso!');
    }

    //Pesquisar po cliente

    public function pesquisar(Request $request){
        $cpf=$request->cpf;

        $cliente=clientes::where('cpf',$cpf)->get();

        if(count($cliente)==0)
        {
            $situacao="CPF não cadastrado!";
            return view('telaPesquisar', compact('situacao'));
        }
        else
        {
            $idCliente=$cliente[0]->id_cliente;
            $nome=$cliente[0]->nome;
            $valor1=compras::where('id_cliente',$idCliente)->sum('valor');
            $valor=(double) $valor1;
            $pontos=$valor*2;
            //return $valor;
        }
   
        return view('telaPesquisar', compact('valor','nome','pontos'));
    }
}
