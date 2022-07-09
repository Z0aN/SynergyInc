@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alet alert-info p-3 mb-4">
            <h3>{{ $data->name }}</h3>
            <p>{{$data->email}}</p>
            <p>{{$data->passport}}</p>
            <p>{{ $data->password }}</p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="{{ route('about-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('about-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>
@endsection