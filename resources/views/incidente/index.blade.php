@extends('layouts.app')
@section('title','Incidentes')
@section('pagina','Manutenção de Incidentes')
@section('body')
    <div class="row">
        <div class="col-md-4">
                <a class="btn btn-warning" href="/">voltar</a>
                <a class="btn btn-primary" href="/incidente/create">inserir incidente</a>
        </div>
        <div class="col-md-6"></div>
    </div>
    <br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Incidentes</h5>
            <br>
            <table class="table table-striped table-hover table-responsive-sm table-sm">
                <thead class="thead-dark ">
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Criticidade</th>
                    <th>Tipo Incidente</th>
                    <th>Status</th>
                    <th>Opções</th>
                </thead>
                <tbody>
                    @foreach ($incidentes as $i)
                        <tr>
                            <td><b># {{ $i->id }}</b></td>
                            <td><b>{{ $i->titulo }}</b></td>
                            <td><b>{{ $i->descricao }}</b></td>
                            <td>
                                <b>
                                    @if ($i->criticidade == 'b')
                                        {{ "Baixa" }}
                                    @endif
                                    @if ($i->criticidade == 'm')
                                        {{ "Média" }}
                                    @endif
                                    @if ($i->criticidade == 'a')
                                        {{ "Alta" }}
                                    @endif
                                </b>
                            </td>
                            <td><b>{{ $i->tipoincidente->descricao }}</b></td>
                            <td><b>
                                    @if ($i->status == "a")
                                         {{ "Aberto" }}
                                    @endif
                                    @if ($i->status == "f")
                                         {{ "Fechado" }}
                                    @endif
                                </b>
                            </td>
                            <td><b>
                                    <a href="/incidente/{{$i->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                                    <button href="/incidente/destroy/{{$i->id}}" type="submit" class="btn btn-sm btn-danger" data-toggle="modal" form="frmCancelar{{$i->id}}">Remover</button>
						      	    <form id="frmCancelar{{$i->id}}" action="/incidente/{{$i->id}}" method="post"  onSubmit="return confirm('Deseja realmente remover este incidente?')">
                                          @csrf
                                          @method('delete')
						      	    </form>
                                </b>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
