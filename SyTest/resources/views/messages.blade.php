@extends('layouts.app')

@section('title-block')Редактирование@endsection

@section('content')
    <h1>Редактирование</h1>
    @foreach($data as $el)
        <div class="alet alert-info p-3 mb-4">
            <h3>{{ $el->name }}</h3>
            <p>{{$el->email}}</p>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{ route('about-data-one', $el->id) }}"><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
@endsection