@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edite seu perfil') }}</div>

                <div class="card-body">
                    <form action="/salvarEdicaoPerfil" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text me-3" id="basic-addon1">Foto de Perfil</span>
                            <input type="file" class="form-control-file mt-1" name='image'>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" name='nome' value="{{$Perfil['nome']}}" placeholder="Nome" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cidade</span>
                            <input type="text" class="form-control" name='cidade' value="{{$Perfil['cidade']}}" placeholder="Cidade" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Data de Nascimento:</span>
                            <input type="date" name="dataNascimento" class="form-control" required>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span>Sexo:</span>
                            
                            <div class="form-check form-check-inline ms-2">
                                <input class="form-check-input" name='sexo' type="checkbox" id="inlineCheckbox1" value="Feminino">
                                <label class="form-check-label" for="inlineCheckbox1">Feminino</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name='sexo' type="checkbox" id="inlineCheckbox2" value="Masculino">
                                <label class="form-check-label" for="inlineCheckbox2" >Masculino</label>
                            </div>
                           

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name='sexo' type="checkbox" id="inlineCheckbox2" value="Outro">
                                <label class="form-check-label" for="inlineCheckbox2">Outro</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Sobre:</label>
                            <textarea class="form-control ms-3" name='sobre' id="exampleFormControlTextarea1" rows="3">{{$Perfil['sobre']}}</textarea>
                        </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection