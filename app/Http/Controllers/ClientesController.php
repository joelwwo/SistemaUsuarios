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

    //Exibir tela de cadastro de cliente --OK
    public function create()
    {
        return view('criar_cliente');
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
            $situacao="CPF já cadastrado!";
            return view('/criar_cliente', compact('situacao'));
        }
        
        else
        {
            if(count($cliente)==0)
            {
                $cliente1=new clientes;
                $cliente1->nome=$request->nome;
                $cliente1->cpf=$request->cpf;
                $cliente1->save();
                $situacao="Cliente cadastrado com sucesso!";
                //return redirect('/criar_cliente',compact('situacao'));

            }
            else
            {

                $cliente1=new clientes;
                $cliente1->nome=$request->nome;
                $cliente1->cpf=$request->cpf;
                $cliente1->save();

                $situacao="Cliente cadastrado com sucesso!";
                //return redirect('/criar_cliente',compact('situacao'));
            }
            return view('/criar_cliente',compact('situacao'));
        }
        
        
    }

    public function InserirCompra(Request $request)
    {
        $cliente=clientes::where('cpf',$request->cpf)->get();
        /* return $cliente;
        exit(); */
        if(count($cliente)==0)
        {
            $situacao="CPF não cadastrado!";
            return view('telaInserirCompra', compact('situacao'));
        }
        else
        {
            $compra=new compras;
            $compra->valor=$request->valor;
            $compra->id_cliente=$cliente[0]->id_cliente;
            //return $compra;
            $compra->save();
            $situacao="Compra inserida com sucesso!";
            return view('telaInserirCompra', compact('situacao'));
            
        }
        
        
        
    }


    public function show(clientes $clientes)
    {
        //
    }

    //Editar no formulário cliente
    public function edit($id)
    {   
        $cliente=clientes::find($id);
        return view('alterarCliente',compact('cliente'));
    }

    //Atualizar cliente no banco de dados
    public function update(Request $request, $id)
    {
        $cliente1=clientes::where('cpf',$request->cpf)->get();
        $idCliente1=$cliente1[0]->id_cliente;
        $cliente=clientes::find($id);
        $idCliente=$cliente->id_cliente;


       
        if($idCliente!=$idCliente1)
        {   
            $situacao="CPF já cadastrado!";
            $clientes=clientes::get();
            

            return view('/home', compact('situacao','clientes'));
        }
        else
        {   
            $situacao="Usuário alterado com sucesso!";
            $client=clientes::find($id);
            $client->nome=$request->nome;
            $client->cpf=$request->cpf;
            $client->save();
            $clientes=clientes::get();
        
            return view('/home', compact('situacao','clientes'));
        }

    }

    //Excluir cliente
    public function destroy($id)
    {
        clientes::destroy($id);

        return redirect('home');
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
            $valor=compras::where('id_cliente',$idCliente)->sum('valor');
        }
   
        return view('telaPesquisar', compact('valor','nome'));
    }
}
