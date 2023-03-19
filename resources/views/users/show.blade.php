@extends('template.default')

@section('title', 'Usuários - ' . $user->name)

@section('content')
<div class="card">
    <div class="card-body">
        {{$user->id}} - {{$user->name}} ({{$user->email}})
    </div>
    <div class="card-footer">
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
            @csrf
            @method('delete')
        <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}"><i class="fas fa-edit"></i> Editar</a>
        <button class="btn btn-danger" href="{{route('users.destroy', $user->id)}}"><i class="fa-solid fa-trash"></i> Excluir</button>
        <a class="btn btn-link" href="{{route('users.index')}}"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
    </div>
</div>

@endsection