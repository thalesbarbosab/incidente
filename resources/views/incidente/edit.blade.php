@extends('layouts.app')
@section('title','Editar Incidente')
@section('body')
@section('pagina','Editar Incidente')
<div class="card border">
    <div class="card-body">
        <form action="/incidente/{{$i->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
            <input type="text" class="form-control" maxlength="100" name="titulo" required id="titulo" placeholder="Insira o título de seu incidente" value="{{$i->titulo}}">
            </div>
            <div class="form-group">
                <textarea class="form-control" maxlength="500" name="descricao" id="descricao" cols="30" rows="3" required placeholder="Descreva detalhadamente o incidente para que nossa equipe esteja ciente da situação." >{{$i->descricao}}</textarea>
            </div>
            <div class="form-group">
                <select name="criticidade" class="form-control" id="criticidade" required>
                    <option value="">Selecione a criticidade</option>
                    @if ($i->criticidade == "b")
                        <option selected value="b">Baixa</option>
                        <option value="m">Média</option>
                        <option value="a">Alta</option>
                    @endif
                    @if ($i->criticidade == "m")
                        <option value="b">Baixa</option>
                        <option selected value="m">Média</option>
                        <option value="a">Alta</option>
                    @endif
                    @if ($i->criticidade == "a")
                        <option value="b">Baixa</option>
                        <option value="m">Média</option>
                        <option selected value="a">Alta</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <select name="tipo_incidente" class="form-control" id="tipo_incidente" required>
                    <option value="">Selecione o tipo de incidente</option>
                    @foreach ($ti as $t)
                        @if ($t->id == $i->tipo_incidente)
                            <option selected value="{{$t->id}}">{{$t->id}} - {{$t->descricao}}</option>
                        @else
                            <option value="{{$t->id}}">{{$t->id}} - {{$t->descricao}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="criticidade" class="form-control" id="criticidade" required>
                    <option value="">Selecione a criticidade</option>
                    @if ($i->criticidade == "b")
                        <option selected value="b">Baixa</option>
                        <option value="m">Média</option>
                        <option value="a">Alta</option>
                    @endif
                    @if ($i->criticidade == "m")
                        <option value="b">Baixa</option>
                        <option selected value="m">Média</option>
                        <option value="a">Alta</option>
                    @endif
                    @if ($i->criticidade == "a")
                        <option value="b">Baixa</option>
                        <option value="m">Média</option>
                        <option selected value="a">Alta</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <select name="status" class="form-control" id="status" required>
                    <option value="">Selecione o status</option>
                    @if ($i->status == "a")
                        <option selected value="a">Aberto</option>
                        <option value="f">Fechado</option>
                    @endif
                    @if ($i->status == "f")
                        <option value="a">Aberto</option>
                        <option selected value="f">Fechado</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Alterar Incidente</button>
            <a type="cancel" href="/incidente" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection
