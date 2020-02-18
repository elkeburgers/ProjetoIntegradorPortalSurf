@section('titulo')
Portal Surf - Login
@endsection

@extends('layouts.templateSurf')

@section('conteudo')

<!-- aviso de login -->
<section class="container flex-column d-flex h-auto align-items-center">
    <div class="textoLogin">
        <h3 class="text-center flex-wrap"> OPS! VOCÊ PRECISA ESTAR LOGADO
        PARA ACESSAR ESTA PÁGINA!</h3>
        <h4 class="container d-flex justify-content-center text-center col-8 mt-3">Faça seu login abaixo, ou se for o seu
        primeiro acesso, aproveite para se cadastrar e entrar nessa onda!</h4>

    </div><br><br>

<!-- campo para login -->

                <div class="cardBlog shadow-lg p-4 bg-white h-auto">
                    <form method="POST" action="{{ route('login') }}" class="h-auto">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-2 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ml-3">
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar de mim') }}
                                    </label>
                                </div>
                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btnSurf">
                                    {{ __('Dropar') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a sua senha?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
           
                </div>
   

                <!-- botao para cadastro -->
                <div class="d-flex justify-content-center mt-5 mb-5">
                    <a href="register" class="btn btnSurf mb-2">Primeiro acesso</a>
                </div>
</section>



@endsection
