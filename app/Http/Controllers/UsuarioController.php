<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsuario;


class UsuarioController extends Controller
{
    private $usuario;

    function __construct()
    {
        $this->usuario = new ModelUsuario();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->usuario->create([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'email'=>$request->email,
            'senha'=>md5($request->senha)
        ]);
        if($result){
            return redirect('/');
        }
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

    public function auth(){
        $access = false;
        $error = null;

        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $usuario = $this->usuario->where('email', $email)->first();
        
        if($usuario){
            if($usuario->senha == $senha){
                $access = true;
            }else{
                $error = 'Senha inválida...';
            }
        }else{
            $error = 'Email não cadastrado...';
        }
        if(!$access){
            return view('login', compact('error'));
        }
        session_start();
        $_SESSION["nome_usuario"] = $usuario->nome;
        $_SESSION["email_usuario"] = $usuario->email;
        return redirect('/');
    }
    public function logoff(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
