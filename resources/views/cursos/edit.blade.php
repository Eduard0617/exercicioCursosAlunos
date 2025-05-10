@extends('layout.app')

@section('content')
<h1 class="text-white text-center mt-5 fs-2 pt-5" >Novo Curso</h1>

<div class="d-flex justify-content-center align-items-center">
    <div class="bg-secondary d-flex w-25 justify-content-center align-items-center rounded-5 p-5 fs-5">
        <form method="post" action="">
            @csrf
            <div class="mb-4">
                <label class="text-black fs-5">Nome do Curso</label>
                <input type="text" name="nomeCurso" class="form-control fs-5" required>
            </div>
            <div class="mb-4">
                <label class="text-black fs-5">Descrição</label>
                <input type="text" name="descricao" class="form-control fs-5" required>
            </div>
            <div class="mb-4">
                <label class="text-black fs-5">Carga Horária</label>
                <input type="number" name="cargaHorariaCurso" class="form-control fs-5" required>
            </div>
            <div class="mb-4">
                <label class="text-black fs-5">Preço</label>
                <input type="number" name="valorCurso" class="form-control fs-5" required>
            </div>

            <button type="submit" class="btn btn-primary fs-4 px-4 py-2">Cadastrar</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-danger fs-4 px-4 py-2">Cancelar</a>
        </form>
    </div>
</div>
