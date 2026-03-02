@extends('layout')

@section('content')

@error('name')
    <div class="alert alert-warning">{{ $message }}</div>
@enderror

<h1>Create</h1>

{{-- <form action="{{ route('county.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="postal_codes">Postal codes</label>
        <input type="text" name="postal_codes" id="postal_codes">
    </fieldset> 
    <button type="submit">Save</button>
</form> --}}

@endsection 