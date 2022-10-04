<x-layout>
<div class="mx-4">
                <x-card class="
                p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Enter your info
                        </h2>
                        {{-- <p class="mb-4">Enter</p> --}}
                    </header>

                    <form method="POST" action="/listings" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                > Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="company" value="{{old('company')}}"
                            />
                            @error('company')
                               <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Date of Birth</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="title"
                                {{-- placeholder="Example: Senior Laravel Developer" --}}
                                value="{{old('title')}}"
                            />
                             @error('title')
                               <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >City</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="location"
                                {{-- placeholder="Example: Remote, Boston MA, etc"  --}}
                                value="{{old('location')}}"
                            />
                             @error('location')
                               <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="email" . value="{{old('email')}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="website"
                                class="inline-block text-lg mb-2"
                            >
                                Website
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="website" value="{{old('website')}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                nicknames 
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="tags"
                                {{-- placeholder="Example: Laravel, Backend, Postgres, etc" --}}
value="{{old('tags')}}"

                            />
                             @error('tags')
                               <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                            @enderror
                        </div>



{{-- logo ssection --}}


                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Image
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="logo"
                            />
                                @error('logo')
                               <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                            @enderror

                        </div>


                        



{{-- log section --}}




                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
BIO                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full text-black"
                                name="description"
                                rows="10"
                                {{-- placeholder="Include tasks, requirements, salary, etc" --}}
                                value="{{old('description')}}"
                            ></textarea>
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
ENTER                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </x-card>
            </x-layout>