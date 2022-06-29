@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $Perfil['nome']}}</div>

                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="storage/profile_pics/{{$Perfil['image']}}" class="w-75 h-75 img-thumbnail" alt="imagem padrão">
                        </div>
                        <div class="col-3">
                            <div>
                            
                                <label for="staticEmail" class="col-form-label">Nome:</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $Perfil['nome']}}">
                            </div>
                            <div>
                                <label for="staticEmail" class="col-form-label">Cidade:</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $Perfil['cidade']}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div>
                                <label for="staticEmail" class="col-form-label">Data de nascimento:</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{date('d-m-y', strtotime($Perfil['data_nascimento']))}}">
                            </div>
                            <div>
                                <label for="staticEmail" class="col-form-label">Sexo:</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $Perfil['sexo']}}">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-8 ">
                            <label for="exampleFormControlTextarea1" class="form-label">Sobre:</label>
                            <textarea class="form-control " readonly id="exampleFormControlTextarea1"rows="3">{{ $Perfil['sobre']}}</textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection