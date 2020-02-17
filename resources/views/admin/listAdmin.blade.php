@extends('layouts.templateSurf')

@section('title')
    Portal Surf | Admin
@endsection

@section('content')
<div class="margem">
<section class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h3>Lista de usuários:</h3>
            
            <a href="/admin" class="btn btn-primary">Administradores</a>
            <a href="/admin/usuario" class="btn btn-outline-secondary">Usuários</a>
            <a href="/admin/ofertas" class="btn btn-outline-secondary">Ofertas</a>
        </div>

        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome do usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Criado em</th>
                        <th scope="col">Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($listAdmin as $admin)
                    <tr>
                        <th scope="row"> {{$admin->id}} </th>
                        <td> {{$admin->name}} </td>
                        <td> {{ $admin->email }} </td>
                        <td> {{ $admin->status_id }} </td>
                        <td> {{ $admin->created_at }} </td>
                        <td> {{ $admin->updated_at }} </td>
                        <td>
                            <a class="btn btn-info" href="/admin/atualizar/{{$admin->id}}">Atualizar</a>
                            <a class="btn btn-danger" href="/admin/deletar/{{$admin->id}}">Deletar</a>
                        </td>
                    </tr>
                @empty
                    <h1>Não há Administradores cadastrados</h1>
                @endforelse   
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endsection