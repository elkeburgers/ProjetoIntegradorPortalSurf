@extends('layouts.templateSurf')

@section('titulo')
    Caronas Avaliação
@endsection

@section('conteudo')


<section class="container cardBlog shadow-lg p-5 mt-5">
<div class="text-center">
    <h1>AVALIE A SUA CARONA</h1>
    <br><br>
</div>
    <div class="text-center">
        <p>Ajude outras pessoas a conhecer a sua carona.</p>
        <p> Avalie com uma nota de zero a cinco, sendo zero péssimo e cinco excelente:</p>
    </div>

    <!-- pontuacao -->
    <form action="/action_page.php">
        <div class="mt-5 mb-5 text-center font-weight-bold">
            <div class="form-group row">
                <label for="caronaPontualidade" class="col-sm-3 col-form-label">Pontualidade:</label>
                <select class="form-control col-sm-2" id="caronaPontualidade">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="caronaEducacao" class="col-sm-3 col-form-label">Educação:</label>
                <select class="form-control col-sm-2" id="caronaEducacao">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="caronaSimpatia" class="col-sm-3 col-form-label">Simpatia:</label>
                <select class="form-control col-sm-2" id="caronaSimpatia">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="caronaEndereco" class="col-sm-3 col-form-label">Precisão no endereço:</label>
                <select class="form-control col-sm-2" id="caronaEndereco">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>

        <!-- Depoimento -->
        <div class="form-group mt-3 font-weight-bold">
            <label for="text" class="col-sm-3 col-form-label">Depoimento:</label>
            <textarea class="form-control col-sm-5" id="caronaDepoimento" rows="3"></textarea>
        </div>

        <!-- botao  -->
        <div class="mt-5 ml-3">
            <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Dropar</button></a>
        </div>
    </form>
</section>


$endsection

