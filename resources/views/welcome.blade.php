@extends('layouts.index')

@section('content')
<a href="/create">
    addd
</a>
<ul>
@foreach ( $users as $user)
    <li>
        {{ $user->email }}
    </li>
    <li>
        {{ $user->nickname }}
    </li>
    <li>
        {{ $user->profil->name }}
    </li>
    <li>
        {{ $user->profil->age }}
    </li>
    <li>
        {{ $user->profil->phone }}
    </li>
    <a href="/{{ $user}}/edit">Edit</a>
    <br>
@endforeach
</ul>

@endsection
