@extends('layouts.app')

@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf @method('PATCH')

        Name: <input type="text" name="name" id="" value="{{ old('name', $user->name) }}">
        @error('name')
            <strong class="text-danger">{{ $message }}</strong>
        @enderror
        <br>
        Email: <input type="email" name="email" id="" value="{{ old('email', $user->email) }}">
        @error('email')
            <strong class="text-danger">{{ $message }}</strong>
        @enderror
        <br>
        Password: <input type="password" name="password" id="">
        @error('password')
            <strong class="text-danger">{{ $message }}</strong>
        @enderror
        <br>

        <button type="submit">Save changes</button>
    </form>
@endsection
