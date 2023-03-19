@extends('template.default')

@section('title', 'Usuários - Criar')

@section('content')
<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome-usuario" class="form-label">Nome</label>
        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" id="nome-usuario" name="nome" value="{{old('nome') ?? $user->name}}">
        @if ($errors->has('nome'))
        <div class="invalid-feedback">
            {{$errors->first('nome')}}
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="email-usuario" class="form-label">Email</label>
        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email-usuario" name="email" value="{{old('email') ?? $user->email}}">
        @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button>
    <a class="btn btn-link" href="{{route('users.show', $user->id)}}"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
</form>
@endsection