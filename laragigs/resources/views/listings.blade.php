<!-- <h1>Listings</h1> -->
@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
{{-- @php
    $test = 1;
@endphp;

{{$test}} --}}


{{-- @if(count($listings) == 0)
<p>no listings found</p>
@endif --}}


@unless (count($listings) == 0)
    
@foreach($listings as $listing)    
 
{{-- <h2>
  <a href="/listings/{{$listing['id']}}">  {{$listing['title']}}</a>
</h2>

    <p>
        {{$listing['description']}}
    </p> --}}

    <x-listing-card :listing="$listing"/>
    
@endforeach

@else
<p>No listing found</p>
@endunless
</div>
@endsection

{{-- original code , first code ========================================= --}}

{{-- <h1><?php echo $heading; ?></h1>


<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description'];?></p>

<?php endforeach; ?> --}}