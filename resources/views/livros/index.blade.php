@extends('livros.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>LaraCrud testando e rodando</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('livros.create') }}"> Cadastrar Novo Livro</a>

            </div>


        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>Ordem</th>

            <th>Name</th>

            <th>Autors</th>

            <th width="280px">Ações</th>

        </tr>

        @foreach ($livros as $livro)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $livro->name }}</td>

            <td>{{ $livro->autor }}</td>

            <td>

                <form action="{{ route('livros.destroy',$livro->id) }}" method="POST">

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Deletar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $livros->links() !!}

      

@endsection
