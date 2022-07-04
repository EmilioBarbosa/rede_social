@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Resultado...') }}</div>
            </div>

            @foreach($Perfil as $perfil)

            <div class="card mt-2 shadow-lg">
                <div class="card-header d-flex justify-content-between">
                    <div class="align-self-center">
                        {{$perfil['nome']}}
                    </div>

                    <div>                            
                        <button class="btn btn-dark" id="botaoAdicionar" onclick="adicionarAmigo( '{{$perfil->user_id}}' )">Adicionar</button>                            
                    </div>
                </div>
                <div class="card-body d-flex justify-content-between">
                    <div class="row">
                        <div class="col-6">
                            <img src="storage/profile_pics/{{$perfil['image']}}" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" alt="foto de perfil">
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <p class="m-0">Cidade:</p>
                                <p class="ms-2">{{$perfil['cidade']}}</p>
                            </div>
                            <div class="d-flex">
                                <p class="m-0">Sexo:</p>
                                <p class="ms-2">{{$perfil['sexo']}}</p>
                            </div>
                            <div class="d-flex">
                                <p class="m-0">Nascimento:</p>
                                <p class="ms-2">{{date('d-m-Y', strtotime($perfil['data_nascimento']))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
</div>

@endsection