@extends('templates.html')

@section('content')
    <header>
        <h1>Login</h1>
        <hr>
    </header>
    <div>
        @if (isset($error))
            <div class="validation del" style="text-align: center">
                {{ $error }}
            </div>
        @endif
        <form action="{{url('/auth')}}" method="POST">
            @csrf
            <p><input type="email" name="email" placeholder="Email"></p>
            <p><input type="password" name="senha" placeholder="Senha"></p>
            <p>
                <input type="submit" value="Entrar" class="in">
                <input type="button" value="Cadastrar-se" class="edit" onclick="window.location.href='/usuarios/create'">   
            </p>
        </form>
    </div>
    
@endsection