@extends('layouts.templateSurf')

@section('title')
    Portal Surf | Cadastro Admin
@endsection

@section('content')
<div class="margem">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 m-5">
                <h3 class="mt-10">Cadastro Admin</h3>

                <form action="/admin/cadastro" method="POST" class="card p-4">
                @csrf    

                    <!-- input hidden com status de Status e user_type de Users_group -->
                    <input hidden type="text" name="statusAdmin"  value="1"> 
                    <input hidden type="text" name="user_groupAdmin" value="1"> 

                    <div class="form-group">
                        <label for="nameAdmin">Nome Completo</label>
                        <input name="nameAdmin" type="text" class="form-control" id="nameAdmin" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="emailAdmin">E-mail</label>
                        <input name="emailAdmin" type="email" class="form-control" id="emailAdmin" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="form-group">
                        <label for="passwordAdmin">Senha</label>
                        <input name="passwordAdmin" type="password" class="form-control" id="passwordAdmin" placeholder="Digite sua senha de 8 dígitos" required>
                    </div>

                    <div class="col-lg p-0">
                       <button type="submit" class="btn btn-roxo">Cadastrar</button> 
                    </div>
                    
                </form>
            </div>    
        </div>  

        <div class="row justify-content-center">
            <div class="col-lg-6 m-5">  
                @if(isset($result))
                    @if($result)
                        <h3>Cadastro realizado com sucesso!</h3>
                        <a href="/login">Login</a>
                    @else
                        <h3>Não foi possível realizar o cadastro.</h3>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection