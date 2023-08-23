@extends('layouts.main')
@section('title', 'Company Events - Products')
@section('content')
    @if($id != null)
        <h1>Exibindo produto {{$id}}</h1>
@endsection