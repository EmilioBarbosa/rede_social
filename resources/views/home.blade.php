@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label ">Fale com seus seguidores:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <button type="button" class=" col-4 btn btn-dark  mt-2 me-2">Postar !</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection