@extends('layouts.index')

@section('content')
<form action="/store" method="post">
    @csrf
<input type="email" name='email'>
<input type="text" name="nickname">
<input type="text" name="name">
<input type="number" name="age">
<input type="text" name="phone">

<input type="submit" value="addd">
</form>

@endsection
