@extends('layouts.app')

@section('content')


<table class="table">
  <thead class="thead-custom text-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col" class="d-flex justify-content-end">
            @auth 
                <a href="{{route('posts.create')}}" class="btn btn-success">Create</a>
            @endauth
        </th>
        <th></th>
    </tr>
  </thead>
<tbody>
    @foreach ($data as $post )
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author }}</td>
            <td class="d-flex justify-content-end">
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">More Details</a>
                @auth
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning mx-5">Edit</a>

                    <form method="post" class="d-inline"action="{{route('posts.destroy', $post->id)}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Remove">     
                    </form>
                @endauth
            </td>
        </tr>
   
    @endforeach
                    
    </tbody>
    </table>
                

@endsection