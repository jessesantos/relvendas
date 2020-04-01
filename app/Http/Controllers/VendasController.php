<?php

namespace App\Http\Controllers;

use App\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::all();

        return view('vendas.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required'
        ]);

        $venda = new Venda([
            'titulo' => $request->get('titulo'),
            'descricao' => $request->get('descricao'),
            'quantidade' => $request->get('quantidade'),
            'valor' => $request->get('valor')
        ]);

        $venda->save();

        return redirect('/vendas')->with('success', 'Venda cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venda = Venda::find($id);

        return view('vendas.edit')->with('venda', $venda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required'
        ]);
        
        $venda = Venda::find($id);
        $venda->titulo = $request->get('titulo');
        $venda->descricao = $request->get('descricao');
        $venda->quantidade = $request->get('quantidade');
        $venda->valor = $request->get('valor');
        $venda->save();
        
        return redirect('/vendas')->with('success', 'Venda atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venda = Venda::find($id);
        $venda->delete();

        return redirect('/vendas')->with('success', 'Venda Excluída');
    }
}
