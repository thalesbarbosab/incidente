@extends('layouts.app')
@section('title','Inicio')
@section('pagina','Inicio')
@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
                <div class="col-md-3">
                <div class="card deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Incidentes</h5>
                                <p class="card-text">Manutenção de Incidentes</p>
                                <a href="/incidente" class="btn btn-primary">Acessar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
