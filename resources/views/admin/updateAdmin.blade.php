@extends('layouts.templateSurf')

@section('title')
    Portal Surf | Atualização Admin
@endsection

@section('content')
<div class="margem">
    <div class="container">
        <div class="row justify-content-center mt-10">
            <div class="col-lg-6 m-5">

                @if(isset($user)) 
                <h3 class="mt-10">Atualização de dados Admin</h3>
                <form action="/admin/atualizar" method="POST" class="card p-4">
                @csrf      
                    <!-- input hidden com o id do admin em Users -->
                    <input type="text" name="idAdmin" hidden value="{{ $user->id }}"> 

                    <div class="form-group">
                        <label for="nameAdmin">Nome Completo</label>
                        <input name="nameAdmin" type="text" class="form-control" id="nameAdmin" value="{{ $nameAdmin }}"> 
                    </div>

                    <div class="form-group">
                        <label for="emailAdmin">E-mail</label>
                        <input name="emailAdmin" type="email" class="form-control" id="emailAdmin" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="passwordAdmin">Senha</label>
                        <input name="passwordAdmin" type="password" class="form-control" id="passwordAdmin" value="{{ $user->password }}">
                    </div>

                    <!-- <div class="form-group">
                        <label for="statusAdmin">Status</label>
                        <select class="form-control" name="statusAdmin">
                        <option selected>{{ $user->status_id }}</option>
                        <option value="1">1 - Ativo</option>
                        <option value="2">2 - Inativo</option>
                        </select>
                    </div> -->

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Atualizar</button> 
                    </div>
                    
                </form>
                @elseif(isset($result))

                @else
                    <h3>O usuário não existe ou id incorreto.</h3>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        @if(isset($result)) <!-- se existe -->
                            @if($result) <!-- se é verdadeiro ou falso -->
                                <h3>Atualização realizada com sucesso!</h3>
                                <a class="btn btn-primary" href="/admin">Voltar</a>
                            @else
                                <h3>Não deu certo!</h3>
                                <a href="/atualizar/{id?}"></a>
                            @endif
                        @endif

                    </div>
                </div>



            </div>    
        </div> 
    </div>
</div>
@endsection