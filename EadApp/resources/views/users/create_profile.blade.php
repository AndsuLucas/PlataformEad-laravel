@extends('layouts.app');
@section('content')
    <form action="/profile/create" method="post">
        @csrf
        <label for="">Endereço</label>
        <input type="text" name="address">
        <label for="">Telefone</label>
        <input type="text" name="phone">
        <label for="">Quem sou eu</label>
        <textarea name="whoami"></textarea>
        <input type="submit">
    </form>


@endsection
