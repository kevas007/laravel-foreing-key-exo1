@extends('layouts.index')

@section('content')
<form action="/{{ $edit->id }}/update" method="post">
    @csrf
    @method('PUT')
<input type="email" name='email' value="{{ $edit->email }}">
<input type="text" name="nickname" value="{{ $edit->nickname }}">
<input type="text" name="name" value="{{ $edit->profil->name }}">
<input type="text" name="age" value="{{ $edit->profil->age }}">
<input type="text" name="phone" value="{{ $edit->profil->phone }}">

<input type="submit" value="addd">
</form>

@endsection
