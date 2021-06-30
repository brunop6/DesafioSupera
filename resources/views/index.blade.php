@extends('templates.html')

@section('content')
    <header>
        <h1>Home</h1>
    </header>

    <input type="checkbox" id="check">

    <label for="check">
        <b style="user-select: none" id="btn">&#8250;</b>
        <b style="user-select: none" id="cancel">&#8249;</b>
    </label>

    <div class="sidebar">
        <header>
            @php
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }  
                if (isset($_SESSION['nome_usuario'])) {
                    $logged = true;
                    echo($_SESSION['nome_usuario']);
                }else{
                    $logged = false;
                    echo("Visitante");
                }
            @endphp
        </header>
        <ul>
            @php
                if($logged){
                    echo('<li><a href="/dicas/create">Cadastrar dica</a></li>');
                    echo('<li><a href="/usuarios/logoff">Logoff</a></li>');
                }else{
                    echo('<li><a href="/usuarios">Login</a></li>');
                    echo('<li><a href="/usuarios/create">Cadastrar-se</a></li>');
                }
            @endphp
        </ul>
    </div>

    <section>
        <select id="tipos">
            <option value="">Tipo</option>
            @php
                foreach ($tipos as $tipo) {
                    echo "<option value='$tipo->descricao'>$tipo->descricao</option>";
                }    
            @endphp
        </select>
        <select id="marcas">
            <option value="">Marca</option>
            @php
                foreach ($marcas as $marca) {
                    echo "<option value='$marca->marca'>$marca->marca</option>";
                }    
            @endphp
        </select>
        <select id="modelos" onchange="search()">
            <option value="">Modelo</option>
            @php
                foreach ($modelos as $modelo) {
                    echo "<option value='$modelo->modelo'>$modelo->modelo</option>";
                }    
            @endphp
        </select>
        <h1 style="text-align: center">Últimas dicas</h1>
        @csrf
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dica</th>
                    <th>Veículo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dicas as $dica)
                    <tr>
                        <th>{{$dica->id}}</th>
                        <td>{{$dica->descricao}}</td>
                        <td>{{$dica->marca.' '.$dica->modelo}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection