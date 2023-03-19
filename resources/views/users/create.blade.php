@extends('template.default')

@section('title', 'Usuários - Criar')

@section('content')
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome-usuario" class="form-label">Nome</label>
        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" id="nome-usuario" name="nome" value="{{ old('nome') }}">
        @if ($errors->has('nome'))
        <div class="invalid-feedback">
            {{$errors->first('nome')}}
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="email-usuario" class="form-label">Email</label>
        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"" id="email-usuario" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="senha-usuario" class="form-label">Senha</label>
        <input type="password" class="form-control {{$errors->has('senha') ? 'is-invalid' : ''}}" id="senha-usuario" name="senha" value="{{ old('senha') }}">
        @if ($errors->has('senha'))
        <div class="invalid-feedback">
            {{$errors->first('senha')}}
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="senha-usuario" class="form-label">Confirmação de senha</label>
        <input type="password" class="form-control" id="senha-usuario" name="senha_confirmation" value="{{ old('senha_confirmation')}}">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Criar</button>
    <a class="btn btn-link" href="{{route('users.index')}}"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
</form>
@endsection