@extends('layouts.app')

@section('content')
    <a href="{{ route('user.create') }}">Store an user | </a><br>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} |
                <a href="{{ route('user.show', $user->id) }}">view | </a>
                <a href="{{ route('user.edit', $user->id) }}">edit</a>
            </li>
        @empty
            <p>NO DATA</p>
        @endforelse
    </ul>
    <br>
    <p>{{ $users->links() }}</p>
@endsection
