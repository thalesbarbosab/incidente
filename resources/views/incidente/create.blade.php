@extends('layouts.app')
@section('title','Inserir Incidente')
@section('body')
@section('pagina','Inserir Incidente')
<div class="card border">
    <div class="card-body">
        <form action="/incidente" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" maxlength="100" name="titulo" required id="titulo" placeholder="Insira o título de seu incidente">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descricao" maxlength="500" id="descricao" cols="30" rows="5" required placeholder="Descreva detalhadamente o incidente para que nossa equipe esteja ciente da situação."></textarea>
            </div>
            <div class="form-group">
                <select name="criticidade" class="form-control" id="criticidade" required>
                    <option value="">Selecione a criticidade</option>
                    <option value="b">Baixa</option>
                    <option value="m">Média</option>
                    <option value="a">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <select name="tipo_incidente" class="form-control" id="tipo_incidente" required>
                    <option value="">Selecione o tipo de incidente</option>
                    @foreach ($tipoincidente as $ti)
                        <option value="{{$ti->id}}">{{$ti->id}} - {{$ti->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Inserir Incidente</button>
            <a type="cancel" href="/incidente" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection
