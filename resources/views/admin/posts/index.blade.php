@extends('layouts.app')

@section('content')
    {{--Qui inserisco i post--}}

    <h1>Pagina per i post</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
          </tr>
        </thead>


        @foreach ($posts as $post)
        <tbody>
            <tr>
                <td>{{$post -> id}}</td>
                <td>{{$post -> title}}</td>
                <td>{{$post -> description}}</td>
            </tr>
        </tbody>>
        @endforeach
    </table>


@endsection
