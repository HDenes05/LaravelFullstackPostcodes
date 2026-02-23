<h1>Index</h1>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
    @foreach ($counties as $county)
    <li>{{$county->postal_code}} - {{$county->place_name}} - {{$county->county}}</li>    
    @endforeach
</ul>