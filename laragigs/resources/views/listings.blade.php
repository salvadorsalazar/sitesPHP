<!-- <h1>Listings</h1> -->
@extends('layout')
@section('content')
@include('partials._hero')
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
 <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/no-image.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">{{$listing->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}                          MA
                            </div>
                        </div>
                    </div>
                </div>
{{-- <h2>
  <a href="/listings/{{$listing['id']}}">  {{$listing['title']}}</a>
</h2>

    <p>
        {{$listing['description']}}
    </p> --}}

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