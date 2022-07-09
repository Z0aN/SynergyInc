@extends('layouts.app')

@section('title-block')Мой аккаунт@endsection

@section('content')
    <h1>Контакты</h1>


    <form action="{{ route('about-form') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        
        <div class="form-group mb-3">
            <label for="surname">Введите фамилию</label>
            <input type="text" name="surname" placeholder="Введите фамилию" id="surname" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="name">Введите почту</label>
            <input type="email" name="email" placeholder="example@email.com" id="email" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="passport">Введите паспортные данные</label>
            <input type="text" name="passport" placeholder="Введите серию и номер" id="passport" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="password">Введите пароль</label>
            <input type="text" name="password" placeholder="Пароль" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-success">Отправить</button>
    </form>
@endsection