@extends('layout.base')

@section('title', 'Cadastro de usuário')

@section('conteudo')
<p>Digital One</p>
<form action="{{ route('salvar') }}" method="post">

    {{ csrf_field() }}

    <div class="field">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" />

        @if($errors->has('nome'))
            @foreach($errors->get('nome') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
    </div>

    <div class="field">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" />
        @if($errors->has('email'))
            @foreach($errors->get('email') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
    </div>

    <div class="field">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" />
        @if($errors->has('password'))
            @foreach($errors->get('password') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
    </div>
    <button type="submit">Salvar</button>
</form>
@endsection