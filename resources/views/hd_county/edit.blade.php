@extends('layout')

@section('content')

@error('name')
    <div class="alert alert-warning">{{ $message }}</div>
@enderror

<form action="{{ route('hd_county.update', $county->id) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">County name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $county->name) }}">
    </fieldset>
    <button type="submit">Save</button>
</form>

@endsection