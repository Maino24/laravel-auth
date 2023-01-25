@extends('layouts.app')

@section('content')
    {{--Qui inserisco i post--}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>


        @foreach ($posts as $post)
        <tbody>
            <tr>
                <td>{{$post -> id}}</td>
                <td>
                  <a href="{{route('admin.posts.show', $post->id)}}">
                    {{$post -> title}}
                  </a>
                </td>
                <td>{{$post -> description}}</td>
                <td></td>
            </tr>
        </tbody>>
        @endforeach
    </table>


@endsection
