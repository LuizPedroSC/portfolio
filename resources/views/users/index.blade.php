@extends('template.default')

@section('title', 'Usuários')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ver</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('users.show', $user->id)}}"><i class="fa-solid fa-eye"></i></td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum usuário cadastrado</td>
            </tr>
        @endforelse
    </tbody>
</table>
<a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Criar</a>
@endsection