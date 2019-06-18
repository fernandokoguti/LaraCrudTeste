@extends('livros.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Cadastrar novo livro</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('livros.index') }}"> Voltar</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Segura o ímpeto aí!</strong> Tá dando erro no cadastro, verifique a escrita.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('livros.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nome:</strong>

                <input type="text" name="name" class="form-control" placeholder="Informe o nome">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Autor:</strong>

                <textarea type="text" class="form-control" name="autor" placeholder="Informe o autor"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Cadastrar</button>

        </div>

    </div>

   

</form>

@endsection
