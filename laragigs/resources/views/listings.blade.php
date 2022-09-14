<!-- <h1>Listings</h1> -->

<h1>{{$heading}}</h1>

{{-- @php
    $test = 1;
@endphp;

{{$test}} --}}


@if(count($listings) == 0)
<p>no liatinga found</p>
@endif

@foreach($listings as $listing)    

<h2>
    {{$listing['title']}}
</h2>

    <p>
        {{$listing['description']}}
    </p>

@endforeach



{{-- original code , first code ========================================= --}}

{{-- <h1><?php echo $heading; ?></h1>


<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description'];?></p>

<?php endforeach; ?> --}}