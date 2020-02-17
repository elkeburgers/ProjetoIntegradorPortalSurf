@extends('layouts.templateSurf')

@section('titulo')
Seus dados
@endsection

@section('conteudo')

<div class="container" id="usuarioTopo2">
@CSRF

    @foreach($dados as $dado)

    @if(Auth::user()->id == $dado ->user_id)

    <div class="d-flex h-75">

        <form action="/register" method="POST" enctype="multipart/form-data" class="shadow-lg formRegister"
            name="dadosForm">
            <!-- @CSRF -->

            <!-- dados pessoais -->
            <div style="margin-left: 81px;">
                <div class="text-center" id="dadosPessoais">
                    <h4>SEUS DADOS PESSOAIS</h4>
                    <br>
                </div>

                <div class="form-inline mt-3">
                    <label for="name" class="col-sm-2">Nome completo:</label>
                    <input id="name" type="text" class="col-sm-8 form-control" name="name" value={{$dado -> name}}>
                </div><br>

                <div class="form-inline mt-3">
                    <label for="email" class="col-sm-2">E-mail:</label>
                    <input id="email" type="email" class="form-control col-sm-4" name="email" value={{$dado -> email}}>

                    <label for="password" class="col-sm-1">Senha:</label>
                    <input id="password" type="password" class="form-control col-sm-3" name="password"
                        value={{$dado -> password}}>
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="cpf" class="col-sm-2">CPF:</label>
                    <input type="text" class="form-control col-sm-3" id="cpf" name="cpf" value={{$dado -> cpf}}>

                    
                    <!-- IMPORTANTE:  COMO FAZER A SELECAO CORRETA NO PHP? -->

                    <label for="gender" class="col-sm-2">Gênero:</label>
                    <select class="form-control col-sm-3" id="gender" name="gender">
                        <input type="text" class="form-control col-sm-3" id="gender" name="gender" value="{{$dado -> gender}}"> 
                        <!-- <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="neutro">Prefiro não declarar</option> -->
                    </select>
                </div>
                <br>

                <!-- Dados de endereco -->
                <div class="form-inline mt-3">
                    <label for="state" class="col-sm-2">Estado:</label>
                    <input type="text" class="form-control col-sm-3" id="state" name="state" value={{$dado -> state}}>

                    <label for="city" class="col-sm-2">Cidade:</label>
                    <input type="text" class="form-control col-sm-3" id="city" name="city" value={{$dado -> city}}>
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="phone1" class="col-sm-2">Telefone 01:</label>
                    <input type="text" class="form-control col-sm-3" id="phone1" name="phone1"
                        value={{$dado -> phone1}}>

                    <label for="phone2" class="col-sm-2">Telefone 02:</label>
                    <input type="text" class="form-control col-sm-3" id="phone2" name="phone2"
                        placeholder="Inclua DDD, use apenas números." value={{$dado -> phone2}}>
                </div>
                <br>

                <!-- opcao em receber notificacos por email -->

                <!-- IMPORTANTE:  COMO FAZER A SELECAO NO PHP? -->
                <div class="font-weight-bold">
                    <label class="form-check-label mt-3 col-sm-10" for="emailNotification">Você aceita receber
                        notificações por e-mail?
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="emailNotification" id="emailSim"
                                for="emailNotification" value="sim">
                            <label class="form-check-label" for="emailNotification">Sim</label>
                            <input class="form-check-input ml-2" type="radio" name="emailNotification" id="emailNao"
                                for="emailNotification" value="nao">
                            <label class="form-check-label" for="emailNotification">Não</label>
                        </div>
                </div><br><br>

                <!-- termos e condicoes para consulta -->
                <div class="form-group">
                    <label class="font-weight-bold">Termos e Condições do Portal Surf</label>
                    <textarea class="form-control col-sm-11"
                        rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! </textarea>
                </div>

                <!-- botao Salvar e Cancelar -->

                <!-- COMO FAZER A EDICAO E CANCELAMENTO CORRETAMENTE???? -->
                <div class="d-flex flex-row">
                    <a href="{{route('register.edit', $dado -> id)}}" class="btn encontreBotao mr-1">Editar</a>
                    <form action="{{route('register.destroy', $dado -> id)}}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </form>
                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    <p>{{session('success')}}</p>
                </div>
                @endif

            </div>
        </form>
    </div>

    @endif

    @endforeach

</div>

<!-- botao topo -->
<div class="container text-center mt-5 mb-2">
    <a href="#usuarioTopo2" class="btn encontreBotao ">Topo</a>
</div>


<!-- validacao javascript do formulario -->
<script type="text/javascript">
    function validar_dadosForm() {
        var name = registerForm.name.value;
        var email = registerForm.email.value;
        var password = registerForm.password.value;
        var cpf = registerForm.cpf.value;
        var gender = registerForm.gender.value;
        var state = registerForm.state.value;
        var city = registerForm.city.value;
        var phone1 = registerForm.phone1.value;
        var emailNotification = registerForm.emailNotification.value;

        if (name == "") {
            alert("Campo Nome é obrigatório.");
            registerForm.name.focus();
            return false;
        }
        if (email == "") {
            alert(
                "Campo E-mail é obrigatório. Caso tenha preenchido e retornou este erro, verifique se o endereço é válido ou se não foi utilizado por outro usuário."
            );
            registerForm.email.focus();
            return false;
        }
        if (password == "" || password.length <= 5) {
            alert("Campo Senha é obrigatório. Preencha com no mínimo seis caractéres.");
            registerForm.password.focus();
            return false;
        }
        if (cpf == "" || cpf.length < 11) {
            alert("Campo CPF é obrigatório.");
            registerForm.cpf.focus();
            return false;
        }
        if (gender == "") {
            alert("Favor preencher o campo Gênero.");
            registerForm.gender.focus();
            return false;
        }
        if (state == "") {
            alert("Campo Estado é obrigatório.");
            registerForm.state.focus();
            return false;
        }
        if (city == "") {
            alert("Campo Cidade é obrigatório.");
            registerForm.city.focus();
            return false;
        }
        if (phone1 == "" || phone1.length < 10) {
            alert("Favor informar um número de telefone válido.");
            registerForm.phone1.focus();
            return false;
        }
        if (emailNotification == "") {
            alert(
                "Favor informar se aceita receber as nossas notificações por e-mail. Este campo também é importante para as facilitar suas comunicações na sessão Desapego."
            );
            return false;
        }
    }

</script>


@endsection
