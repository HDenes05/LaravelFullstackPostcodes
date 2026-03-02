@extends('layout')

@section('content')

<h1>Cities</h1>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
    @foreach ($counties as $county)
    <li>
       {{$county->place_name}}
        {{-- <a href="{{ route('county.show', $county->id) }}" class="button">Show</a> --}}
        <a href="{{ route('county.edit', $county->id) }}" class="button">Edit</a>
        <form action="{{ route('county.destroy', $county->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="danger" onclick="return confirm('Tutira töröljük?')">Delete</button>
        </form>
    </li>  

    @endforeach
</ul>

@endsection