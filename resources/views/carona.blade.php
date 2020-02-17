@extends('layouts.templateSurf')

@section('titulo')
    Caronas
@endsection

@section('conteudo')
<div class="text-center">
                <h2>VOCÊ QUER:</h2>
            </div>

            <form action="/action_page.php">

                <!-- Opcao da carona -->
                <div class="mt-5 mb-5 text-center font-weight-bold">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="motorista" value="motorista">
                        <label class="form-check-label" for="motorista">DAR UMA CARONA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="passageiro" value="passageiro">
                        <label class="form-check-label" for="passageiro">ENCONTRAR UMA CARONA</label>
                    </div>
                </div>

                <!-- Dados da partida -->
                <div class="form-group mt-3 font-weight-bold">
                    <label for="text">Endereço de Partida:</label>
                    <input type="text" class="form-control" id="partida">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text" class="mr-2">Estado:</label>
                    <input type="text" class="form-control" id="estadoP">
                    <label for="text" class="ml-3 mr-2">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeP">
                    <label for="text" class="ml-3 mr-2">CEP:</label>
                    <input type="text" class="form-control" id="cepP">
                </div>
                <div class="form-group form-check mt-2  ">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de partida cadastrado
                    </label>
                </div>

                <!-- Dados do destino -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Endereço de Destino:</label>
                    <input type="text" class="form-control" id="destino">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text" class="mr-2">Estado:</label>
                    <input type="text" class="form-control" id="estadoD">
                    <label for="text" class="ml-3 mr-2">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeD">
                    <label for="text" class="ml-3 mr-2">CEP:</label>
                    <input type="text" class="form-control" id="cepD">
                </div>
                <div class="form-group form-check mt-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de destino cadastrado
                    </label>
                </div>

                <!-- data da carona -->
                <div class="form-inline" action="/action_page.php">
                    <label for="date" class="mr-2">Data:</label>
                    <input type="date" class="form-control" id="dataD">
                    <label for="text" class="ml-3 mr-2">Horário:</label>
                    <input type="text" class="form-control" id="horarioD">
                </div>

                <!-- Equipamento -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Equipamento:</label>
                    <input type="text" class="form-control" id="equipamento">
                </div>
                <div class="form-group form-check mt-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o equipamento cadastrado
                    </label>
                </div>

                <!-- botao  -->
                <div class="mt-5">
                    <button type="submit" class="btn encontreBotao">Dropar</button>&nbsp
                    <a href="#caronasTopo" class="btn encontreBotao">Topo</a>
                </div>
            </form>
        </section>

        <!-- parte de historico de caronas -->
        <div class="caronaBanner mt-5">
            <h1 class="mx-auto caronaTextoBanner">Histórico</h1>
        </div>

        <!-- cards de historico -->
        <section class="container historico-caronas">
            <div class="card-deck justify-content-center">
                <div class="card mt-5 cardBlog shadow-lg p-4 bg-white col-5">
                    <div class="card-body">
                        <p>Data: 24/10/2019</p>
                        <p>Partida: Rua Pedra Bela, 37, São Paulo, SP</p>
                        <p>Destino: Rua das Flores, 5237, Ubatuba, SP</p>
                        <p>Carona: Vinicius Oliveira</p>
                        <p>Depoimento: O motorista chegou na hora, foi super simpático, me ajudou com o equipamento e
                            ainda
                            me ajudou parando na casa da minha namorada antes de pegar estrada.</p>
                        <a href="./caronasPerfil.php"><button type="button"
                                class="btn encontreBotao">Perfil</button></a>
                        <a href="./caronaAvaliar.php"><button type="button" class="btn encontreBotao"
                                disabled>Avaliar</button></a>
                    </div>
                </div>
                <div class="card mt-5 cardBlog shadow-lg p-4 bg-white col-5">
                    <div class="card-body">
                        <p>Data: 28/10/2019</p>
                        <p>Partida: Rua das Flores, 5237, Ubatuba, SP</p>
                        <p>Destino: Av. Dr.Cardoso de Melo, 90, São Paulo, SP</p>
                        <p>Carona: Vinicius Oliveira</p>
                        <p>Depoimento: </p>
                        <a href="./caronasPerfil.php"><button type="button"
                                class="btn encontreBotao">Perfil</button></a>
                        <a href="./caronaAvaliar.php"><button type="button"
                                class="btn encontreBotao">Avaliar</button></a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- botao topo -->
        <div class="container text-center mt-5">
            <a href="#caronasTopo" class="btn encontreBotao">Topo</a>
        </div>

    </main>
@endsection