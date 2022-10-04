<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
<script src="//unpkg.com/alpinejs" defer></script>


        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "grey",
                        },


                    },
                },
            };
        </script>

        {{--  --}}

        <title>DATABASE</title>
    </head>
    <body class="mb-48 bg-gray-700	--tw-bg-opacity: 1;
background-color: rgba(107, 114, 128, var(--tw-bg-opacity));">
        <nav class="flex justify-between items-center mb-4 bg-black h-20 text-white">
           
             <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >

            <a href="/" 
                >
        HOME        
                
                {{-- <img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /> --}}
        
        
        </a>

             </button>
        
        
        
        <ul class="flex space-x-6 mr-6 text-lg">
             {{--  --}}
             @auth   
             <li>


                    <span class="font-bold uppercase">welcome 
                         <button
                            type="submit"
                            class="h-10 w-300    text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >
                        {{auth()->user()->name}}</button></span>
                    
                
                
                
                </li>
                <li>


                    <a href="/listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        manage listings</a
                    >
                </li>
                
                
                
                <li>
                    <form class="inline" method="POST" action="/logout">
                    
                    @csrf
                <button type="submit">
                    <i class="fa-solid da-door-closed"></i>logout
                </button>
                </form>


                </li>
                @else
{{--  --}}

                  <li>
 <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >

                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                    
                </li>

            </button>
                
                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>


@endauth

            </ul>
        </nav>

        <main>
{{$slot}}
 

</main>

   {{-- <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        > --}}

 <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold ;
bg-black text-white h-20  mt-24 opacity-90 md:justify-center"
        >

            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

            <a href="/listings/create" 
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Enter Data</a
            >
        </footer>
        <x-flash-message />
    </body>
</html>