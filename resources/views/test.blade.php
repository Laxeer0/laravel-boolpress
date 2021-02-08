@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><h1>
            @if($status == 'guest')
                Ciao utente!
            @elseif($status == 'logged')
                Ciao {{$user->name}}!
            @endif
            </h1>
        </div>
    </div>
</div>
@endsection
