<?php

namespace App\Http\Controllers;

use App\clientes;
use App\compras;
use App\usuarios;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{

   // Redireciona para a tela Home --OK
    public function index()
    {
       
        $clientes = DB::table('compras')
        ->select('clientes.id_cliente', 'nome', 'cpf', DB::raw('SUM(valor) as total_compras'))
        ->join('clientes', 'compras.id_cliente', '=', 'clientes.id_cliente')
        ->groupBy('clientes.id_cliente')
        ->orderBy('nome', 'asc')
        ->get();
        
        return view('home',compact('clientes'));
        
    }

    //Exibir a tela Home --OK
    public function home()
    {   
       
        $clientes = DB::table('compras')
        ->select('clientes.id_cliente', 'nome', 'cpf', DB::raw('SUM(valor) as total_compras'))
        ->join('clientes', 'compras.id_cliente', '=', 'clientes.id_cliente')
        ->groupBy('clientes.id_cliente')
        ->orderBy('nome', 'asc')
        ->get();

        return view('home',compact('clientes'));

    }


    //Cadastra cliente --OK
    public function store(Request $request)
    {
        $cliente=clientes::where('cpf',$request->cpf)->get();
        if($request->cpf=="")
        {
            
            $n1 = rand (1,10);
            $n2 = rand (1,100);
            $cpf="Sem CPF-$n1-$n2";
            $cliente1=clientes::where('cpf',$cpf)->get();
            if (count($cliente1)==1)
            {   
                return redirect('home')->with('erro','Já existe um cliente cadastrado com esse CPF!');
            }
            else
            {
                $cliente2=new clientes;
                $cliente2->nome=$request->nome;
                $cliente2->cpf=$cpf;
                $cliente2->save();
                
                /* return strlen($request->cpf); */
                if (count($cliente)==1)
                {   
                    return redirect('home')->with('erro','Já existe um cliente cadastrado com esse CPF!');
                }
                if ($request->valor=="")
                {
                    
                    $compra=new compras;
                    $compra->valor=0;
                    $compra->id_cliente=$cliente2->id_cliente;
                    $compra->save();

                    return redirect('home')->with('sucesso','Cliente cadastrado com sucesso!');
                }
                else
                {
                    $compra=new compras;
                    $compra->valor=$request->valor;
                    $compra->id_cliente=$cliente2->id_cliente;
                    $compra->save();

                    return redirect('home')->with('sucesso','Cliente e compra inseridos com sucesso!');
                }
                
            }
            
        }     
        else
        {
            /* return strlen($request->cpf); */
            
            if (count($cliente)==1)
            {   
                return redirect('home')->with('erro','Já existe um cliente cadastrado com esse CPF!');
            }

            elseif(strlen($request->cpf)!= 14)
            {
                return redirect('home')->with('cpfInvalido','CPF com tamanho incorreto!!');
            }
            
            elseif ($request->valor=="")
            {
                $cliente2=new clientes;
                $cliente2->nome=$request->nome;
                $cliente2->cpf=$request->cpf;
                $cliente2->save();

                $compra=new compras;
                $compra->valor=0;
                $compra->id_cliente=$cliente2->id_cliente;
                $compra->save();

                return redirect('home')->with('sucesso','Cliente cadastrado com sucesso!');
            }
            else
            {
                $cliente2=new clientes;
                $cliente2->nome=$request->nome;
                $cliente2->cpf=$request->cpf;
                $cliente2->save();

                $compra=new compras;
                $compra->valor=$request->valor;
                $compra->id_cliente=$cliente2->id_cliente;
                $compra->save();

                return redirect('home')->with('sucesso','Cliente e compra inseridos com sucesso!');
            }
            
        }
        
    }     
        


    public function InserirCompra(Request $request, $id)
    {
        if($request->valor<1)
        {
            return redirect('home')->with('compra_erro','O valor da compra deve ser maior que zero!');
        }
        else
        {
            $compra=new compras;
        
            $valor=$request->valor;
            $compra->valor=$valor;
            $compra->id_cliente=$id;
            $compra->save();
            return redirect('home')->with('compra','Compra inserida com sucesso!');
        }
          
    }

    //Editar cliente no banco de dados
    public function update(Request $request, $id)
    {

        $cliente=clientes::find($id);
        $existe=clientes::where('cpf',$request->cpf)->count();
        if($cliente->cpf==$request->cpf)
        {
            $cliente->nome=$request->nome;
            $cliente->cpf=$request->cpf;
            $cliente->save();

            return redirect('home')->with('editar','Cliente editado com sucesso!');
        }
        else
        {
            if(strlen($request->cpf)!= 14)
            {
                return redirect('home')->with('cpfInvalido','CPF com tamanho incorreto!!');
            }
            elseif($existe==1)
            {   
                return redirect('home')->with('cpf','Já existe um cliente cadastrado com esse CPF!');
            }
            else
            {   


                $cliente->nome=$request->nome;
                $cliente->cpf=$request->cpf;
                $cliente->save();

                return redirect('home')->with('editar','Cliente editado com sucesso!');
            }

        }

    }

    //Excluir cliente
    public function destroy($id)
    {
        clientes::destroy($id);

        return redirect('home')->with('excluir','Cliente excluído com sucesso!');
    }

 
    public function teste (){
        /* return DB::table('clientes')->delete(); */
        /* $total_compras= clientes::get(); */
           /*  $users = DB::table('clientes')
            ->join('compras', 'clientes.id_cliente', '=', 'compras.id_cliente')
            ->select('clientes.*', 'compras.valor')->sum('valor'); */
            /* ->get(); */
            
            /* $cliente = DB::table('compras')
            ->select('clientes.id_cliente', 'nome', 'cpf', DB::raw('SUM(valor) as total_compras'))
            ->join('clientes', 'compras.id_cliente', '=', 'clientes.id_cliente')
            ->groupBy('clientes.id_cliente')
            ->orderBy('nome', 'asc')
            ->get(); */
           $n1 = rand (100,1000);
           $n2 = rand (100,1000);
           $n3 = rand (100,1000);
           $n4 = rand (10,99);
           $cpf="$n1.$n2.$n3-$n4";
           return $cpf;   
    }

    public function relatorio(){
        return view('relatorio');
    }

    public function pesq(Request $request)
    {
        
        $nome=$request->nome;
        $situacaoCompra="";
        $situacaoCliente="";
        $clientes=clientes::where('nome','like', "%$nome%")->get();
        if(count($clientes)==1)
        {
            $situacaoCliente="um";
            $cliente=clientes::where('id_cliente',$clientes[0]->id_cliente)->get();
            $compras=compras::where('id_cliente',$clientes[0]->id_cliente)->get();
            $valor_compras=compras::where('id_cliente',$clientes[0]->id_cliente)->sum('valor');
            if(count($compras)==1 and $compras[0]->valor==0)
            {
                $situacaoCompra="sem compras";
                return view('relatorio',compact('compras','cliente','valor_compras','situacaoCompra','situacaoCliente'));
            }
            else
            {
                $situacaoCompra="muitas compras";
                return view('relatorio',compact('compras','cliente','valor_compras','situacaoCompra','situacaoCliente'));
            }
            
            
        }
        if(count($clientes)==0)
        {
            $situacaoCliente="sem cliente";
            return view('relatorio',compact('situacaoCliente'));
        }
        if(count($clientes)>1)
        {
        
            $situacaoCliente="muitos clientes";
            return view('relatorio',compact('clientes','situacaoCliente'));
            
        }
        
    }

    public function listarCompras($id)
    {
        $situacaoCompra="";
        $situacaoCliente="um";
        $compras=compras::where('id_cliente',$id)->get();
        $cliente=clientes::where('id_cliente',$id)->get();
        $valor_compras=compras::where('id_cliente',$id)->sum('valor');
        if(count($compras)==1 and $compras[0]->valor==0)
        {
            $situacaoCompra="sem compras";
            return view('relatorio',compact('compras','cliente','valor_compras','situacaoCompra','situacaoCliente'));
        }
        elseif(count($compras)==1 and $compras[0]->valor>0)
        {
            $situacaoCompra="muitas compras";
            return view('relatorio',compact('compras','cliente','valor_compras','situacaoCompra','situacaoCliente'));
        }
        else
        {
            $situacaoCompra="muitas compras";
            return view('relatorio',compact('compras','cliente','valor_compras','situacaoCompra','situacaoCliente'));
        }
        
    }

}
