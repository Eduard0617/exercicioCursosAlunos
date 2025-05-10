@extends('layout.app')
@section ('content')

<h1 class="mb-5 text-white text-center"> Cursos Cadastrados </h1>

<div class="container text-center">
    
    <div class="row justify-content-center">
        <div class="col-5">
            <a href="" class="mb-4 mx-1 btn btn-outline-warning btn-lg w-50">Desenvolvimento de Sistemas</a>
            <a href="" class="mb-4 mx-1 btn btn-outline-primary btn-lg">Editar</a>
            <a href="" class="mb-4 mx-1 btn btn-outline-danger btn-lg">Excluir</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
            <a href="" class="mb-4 mx-1 btn btn-outline-warning btn-lg w-50">Administração</a>
            <a href="" class="mb-4 mx-1 btn btn-outline-primary btn-lg">Editar</a>
            <a href="" class="mb-4 mx-1 btn btn-outline-danger btn-lg">Excluir</a>
        </div>
    </div>

</div>

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-5">
            <a href="{{ route('cursos.create') }}" class="mt-5 btn btn btn-outline-success btn-lg w-50">Cadastrar Curso</a>
        </div>
    </div>
</div>

@endsection