@extends('layouts.app')

@section('content')
    @if ($users->isEmpty())
        <p class="text-warning">the user isn't in our database</p>
    @else
        <ul>
            @foreach ($users as $user)
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>
                <h5>{{ $user->created_at->diffForHumans() }}</h5><br>
                <a href="{{ route('user.show', $user->id) }}">view | </a>
                <a href="{{ route('user.edit', $user->id) }}">edit | </a>
                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                    @csrf @method('DELETE')

                    <button type="submit">DELETE</button>
                </form>
            @endforeach
        </ul>
    @endif
@endsection
