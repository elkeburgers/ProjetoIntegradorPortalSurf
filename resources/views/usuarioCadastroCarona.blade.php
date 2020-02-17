@extends('layouts.templateSurf')

@section('titulo')
Caronas - Cadastro Usuario
@endsection

@section('conteudo')


    <form action="/action_page.php">

        <!-- Dados carona -->
        <section class="container mt-5 shadow-lg p-3 cardBlog" id="usuario2Topo">
            <div class="text-center" id="dadosCarona">
                <h4>SEUS DADOS DE CARONA</h4>
                <br>
            </div>

            <!-- dados da carona -->
            <div class="font-weight-bold">
                <div class="form-check-inline">
                    <label class="form-check-label mt-3">Você é:
                        <input type="checkbox" class="form-check-input" value="motorista">Motorista
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="passageiro">Passageiro
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="ambos">Ambos
                    </label>
                </div>
            </div>
            <br>

            <div class="form-inline" action="/action_page.php">
                <label for="text" class="mr-2">Registro da CNH:</label>
                <input type="text" class="form-control" id="cnh">
                <label for="text" class="ml-3 mr-2">Validade:</label>
                <input type="data" class="form-control" id="validadeCnh">
                <label for="text" class="ml-3 mr-2">Categoria Habilitação:</label>
                <input type="text" class="form-control" id="catCNH">
            </div><br>

            <!-- Seguranca feminina -->
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    <input type="checkbox" class="form-check-input" value="termos">Sim, aceito oferecer/ receber caronas de homens.
                </label>
            </div><br>

            <!-- Equipamento -->
            <div class="form-group mt-5 font-weight-bold">
                <label for="text">Equipamento:</label>
                <input type="text" class="form-control" id="equipamento">
            </div>

            <!-- Dados do carro -->
            <div class="form-inline" action="/action_page.php">
                <label for="text" class="mr-2">Marca do carro:</label>
                <input type="text" class="form-control" id="carroMarca">
                <label for="text" class="ml-3 mr-2">Modelo do carro:</label>
                <input type="text" class="form-control" id="carroModelo">
                <label for="text" class="ml-3 mr-2">Ano do carro:</label>
                <input type="text" class="form-control" id="carroAno">
            </div><br>
            <div class="form-inline" action="/action_page.php">
                <label for="text" class="mr-2">Cor do carro:</label>
                <input type="text" class="form-control" id="carroCor">
                <label for="text" class="ml-3 mr-2">Placa do carro:</label>
                <input type="text" class="form-control" id="carroPlaca">
                <label for="text" class="ml-3 mr-2">Renavam:</label>
                <input type="text" class="form-control" id="carroRenavam">
            </div><br>

            <!-- aceite de termos e condicoes -->
            <div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Termos e Condições do Programa de Caronas</label>
                    <textarea class="form-control" id="termosEmpresa"
                        rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! </textarea>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label mt-3">
                        <input type="checkbox" class="form-check-input" value="termos">Aceito os termos e condições.
                    </label>
                </div><br>
                <div class="form-check-inline">
                    <label class="form-check-label mt-3">
                        <input type="checkbox" class="form-check-input" value="termos">Aceito receber notificações
                        por e-mail.
                    </label>
                </div><br>

                <!-- botao Salvar e Cancelar -->
                <div class="container mt-5">
                    <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                    <button type="submit" class="btn encontreBotao">Cancelar</button>
                </div>
        </section>
    </form>

    <!-- botao topo -->
    <div class="container text-center mt-5">
        <a href="#usuario2Topo" class="btn encontreBotao">Topo</a>
    </div>


@endsection
