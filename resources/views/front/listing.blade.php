@extends('master')
@section('content')
    <div class="user-form-block">
        <div class="container">
            @foreach($advertisements as $advertisement)
                {{$advertisement -> name}}
                @endforeach
        </div>
    </div>
    @endsection