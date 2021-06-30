
@section('content')
    <header>
        <h1>Cadastro</h1>
        <hr>
    </header>
    <div>
        @if (isset($errors) && count($errors) > 0)
            <div class="validation del" style="text-align: center">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        <form name="formCadDicas" id="formCadDicas" action="{{url('/dicas')}}" method="POST">
            @csrf
            <p><input type="hidden" name="usuario" value="
                @php
                    session_start();
                    {{$_SESSION['nome_usuario']}}
                @endphp
                "></p>
            <p><input type="text" name="sobrenome" placeholder="Sobrenome" required></p>
            <p><input type="email" name="email" placeholder="E-mail" required></p>
            <p><input type="password" name="senha" id="senha" placeholder="Senha" required></p>
            <p><input type="password" name="confirm_senha" id="confirm_senha" onkeyup="verificaSenha()" placeholder="Confirme sua senha" required></p>
            <p>
                <input type="submit" value="Cadastrar-se" class="in">
                <input type="button" value="Cancelar" onclick="window.location.href='{{url('/')}}'" class="del">
            </p>
        </form>
    </div>
@endsection