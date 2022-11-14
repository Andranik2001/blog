@extends('layouts.app')

@section('title')
    Countries
@endsection

@section('content')
<select>
    @foreach ($countries as $country)
        <option value="">{{$country->name}}</option>
    @endforeach
</select>
@endsection
