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

                    <form action="/enviarPost" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label ">Fale com seus seguidores:</label>
                                    <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end">
                                <button type="submit" class=" col-4 btn btn-dark  mt-2 me-2">Postar !</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            

            
            <div class="card mt-2 shadow-lg">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        Emilio
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                        <span>1</span>
                    </div>
                </div>
                <div class="card-body text-center"></div>
            </div>
            


            
            
        </div>
    </div>
</div>

<script>
    
</script>
@endsection