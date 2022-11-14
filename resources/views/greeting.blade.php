@extends('layouts.app')

@section('title')
    General
@endsection

@section('content')

    @for ($i = 0; $i < count($records); $i++)
        <li> {{ $records[$i] }}</li>
    @endfor

@endsection
