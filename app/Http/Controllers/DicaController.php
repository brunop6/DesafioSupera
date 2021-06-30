<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelDica;
use App\Models\ModelVeiculo;
use App\Models\ModelTipo;

use function GuzzleHttp\Promise\all;

class DicaController extends Controller
{
    private $dica;
    private $veiculo;
    private $tipo;

    function __construct()
    {
        $this->dica = new ModelDica();
        $this->veiculo = new ModelVeiculo();
        $this->tipo = new ModelTipo();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dicas = $this->dica->search();
        $tipos = $this->tipo->get('descricao');
        $marcas = $this->veiculo->distinct()->get('marca');  
        $modelos = $this->veiculo->get('modelo');  
        
        return view('index', compact('dicas', 'tipos', 'marcas', 'modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veiculos = $this->veiculo->paginate(10);
        return view('cadastroDica', compact('veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
