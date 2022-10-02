@props(['listing'])



<x-card>

<div class="flex">
    <a href="/listings/{{$listing->id}}">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                            alt=""
                        /></a>

                      

{{--  --}}
                        <div>                        
                                <div class="text-xl font-bold mb-4"><a href="/listings/{{$listing->id}}">{{$listing->company}}</a></div>


{{--  --}}

                            <h3 class=" text-xl font-bold mb-4">
                                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                            </h3>
{{--  --}}

                            {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

{{--  --}}
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> <a href="/listings/{{$listing->id}}">{{$listing->location}}   </a>                       
                            </div>
                        </div>

    {{-- <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i>Edit
                </a>

                <form method ="POST" action="/listings/{{$listing->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                </form>


                </x-card> --}}
                    </div>
                </x-card>