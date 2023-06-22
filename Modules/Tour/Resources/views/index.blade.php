@extends('tour::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('tour.name') !!}
    </p>
@endsection
