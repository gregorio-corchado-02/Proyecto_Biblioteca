@extends('layouts.plantilla')


@include('partials.navbar')

@section('contenido')

    <h1 class='mb-3 mt-4 text-center text-success' >REGISTRAR LIBRO</h1>

    @if(session()->has('confirmacion'))

        <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion') }}','success')</script>

    @endif


    <form action="/guardarlibro" method="POST">
        @csrf
        
        <div class="mx-4 rounded p-4 mb-2">
        <div class="border border-dark rounded p-4">

            <div class="mb-3"> <input class="form-control border-dark" type="number" name="txtIsbn"  placeholder="ISBN" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtIsbn')}}</p>
            <div class="mb-3"> <input class="form-control border-dark" type="text" name="txtTitulo" placeholder="TITULO" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtTitulo')}}</p>
            <div class="mb-3"> <input class="form-control border-dark" type="text" name="txtAutor" placeholder="AUTOR" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtAutor')}}</p>
            <div class="mb-3"> <input class="form-control border-dark" type="number" name="txtPagina" placeholder="PÁGINAS" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtPagina')}}</p>
            <div class="mb-3"> <input class="form-control border-dark" type="text" name="txtEditorial" placeholder="EDITORIAL" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtEditorial')}}</p>
            <div class="mb-3"> <input class="form-control border-dark" type="email" name="txtEmail" placeholder="EMAIL EDITORIAL" value=""> </div>
            <p class="fw-bolder">{{ $errors->first('txtEmail')}}</p>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"> Actualizar </button>
            </div>
            
            
        </div>
        </div>
    </form>

    @include('partials.piedepagina')

@endsection