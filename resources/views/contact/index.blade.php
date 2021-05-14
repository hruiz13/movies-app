@extends('layouts.plantilla')

@section('title', 'Contact')    

@section('content')
    <h1>Get in contact</h1>
    <form action="{{route('contact.store')}}" method="POST">
        @csrf
        <label>
            Name:
            <input type="text" name="name">
        </label>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label>
            e-mail:
            <input type="text" name="email">
        </label>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label>
            Message:
            <textarea type="text" name="message" rows="4"></textarea>
        </label>
        @error('message')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <button type="submit">Send message</button>
    </form>
    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
@endsection