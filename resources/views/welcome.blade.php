@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bevenuto</div>

                <div class="card-body text-center">
                    <h6>Effettua il login per accedere all'area Amministratore oppure clicca il pulsante per visualizzare i posts</h6>
                    <a href="{{route('posts.index')}}" class="btn btn-success">Vedi i Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
