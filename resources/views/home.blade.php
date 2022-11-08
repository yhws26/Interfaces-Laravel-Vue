@extends('layouts.app')

@section('title', 'Home')
    
@section('content')

    <h1 class="text-5xl text-center pt-24">Welcome to my application</h1>

@endsection

<body>
    
    {{-- VUE --}}
    <div id="app">

    </div>

    @vite('resources/js/app.js')
    
</body>