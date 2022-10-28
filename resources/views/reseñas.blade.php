@extends('template')

@section('main')
    <div class="container mt-5 col-md-6 card-body bg-secondary">
        <form>
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Escribe tu nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Escribe tu Reseña</label>
                <input type="text" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Enviar Comentario!</button>
        </form>
    </div>
    @stop