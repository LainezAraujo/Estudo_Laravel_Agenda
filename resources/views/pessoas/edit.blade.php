@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Editar Contato</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('/pessoas/update')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$pessoa->id}}">
            <div class="from-group col-md-12">
                <label class="control-label">Nome</label>
                <input name="nome"  value="{{$pessoa->nome}}" class="form-control" placeholder="Nome">

            </div>
            <div class="col-md-12">
                <button style="margin-top: 5px; float: right" type="submit" class="btn btn-primary">salvar</button>
            </div>

        </form>
    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">{{$pessoa ->nome}} </div>
            <div class="panel-body">
                @foreach($pessoa->telefone as $telefone)
                    <p><strong> Telefone:</strong> ({{$telefone->ddd}}) {{$telefone ->telefone}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection