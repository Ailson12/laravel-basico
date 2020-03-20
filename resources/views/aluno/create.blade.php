@extends('adminlte::page')

@section('title', 'Formulário')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulário de Aluno</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['url' => route('aluno.store')]) !!}
                <div class="form-group">
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('curso_id', 'Curso') !!}
                    {!! Form::text('curso_id',$teste, null, ['class' => 'form-control']) !!}
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