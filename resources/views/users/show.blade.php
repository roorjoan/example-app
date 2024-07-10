@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <h3>{{ $user->email }}</h3>
    <h5>{{ $user->created_at->diffForHumans() }}</h5><br>
    <form action="{{ route('user.destroy', $user->id) }}" method="post">
        @csrf @method('DELETE')

        <button type="submit">DELETE</button>
    </form>
@endsection
