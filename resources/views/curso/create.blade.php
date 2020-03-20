@extends('adminlte::page')

@section('title', 'Formulário')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulário de Curso</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['url' => route('curso.store')]) !!}
                <div class="form-group">
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('professor', 'Professor') !!}
                    {!! Form::text('professor', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
  
@stop

@section('js')

@stop