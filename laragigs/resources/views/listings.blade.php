<!-- <h1>Listings</h1> -->
@extends('layout')
@section('content')

<h1>{{$heading}}</h1>

{{-- @php
    $test = 1;
@endphp;

{{$test}} --}}


{{-- @if(count($listings) == 0)
<p>no listings found</p>
@endif --}}


@unless (count($listings) == 0)
    
@foreach($listings as $listing)    

<h2>
  <a href="/listings/{{$listing['id']}}">  {{$listing['title']}}</a>
</h2>

    <p>
        {{$listing['description']}}
    </p>

@endforeach

@else
<p>No listing found</p>
@endunless
@endsection

{{-- original code , first code ========================================= --}}

{{-- <h1><?php echo $heading; ?></h1>


<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description'];?></p>

<?php endforeach; ?> --}}