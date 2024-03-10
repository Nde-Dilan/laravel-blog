{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     </head>
    <body class="font-sans antialiased">
       
    </body>
</html>
 --}}
 
 
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nde Dilan">
    {{-- INFO: Since the layout will be available everywhere we can dynamically change the title and the other meta data--}}
    <title>{{ $metaTitle ?: "Tech With Dilan's Blog"}} </title>
    <meta  name="description" content="{{ $metaDescription ?: "Dive into the tech world with Tech With Dilan's Blog"}}">
    <meta name="keywords" content="{{ $metaKeywords ?: "Tech Computer JS Python Coding fun program programming Dilan's Blog"}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> --}}
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        } */

        pre {
            padding: 1rem;
            background: #1a202c;
            color:white;
            border-radius: .5rem;
            margin-bottom:1rem;
        }
    </style>

    <!-- AlpineJS -->
    {{-- <link rel="stylesheet" href="style.css"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('public/fontawesome-free-6.5.1-web/css/all.min.css') }}"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" --}}
    {{-- integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script> --}}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   

</head>

<body class="font-family-karla">
        @include('layouts.navigation')


   
    <!-- Top Bar Nav -->
   @auth
   <nav class="w-full py-4 shadow ">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
        
        <nav class="w-full px-6">
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                {{-- //After adding/renaming the route inside web.php file, we can now use the route helper function to generate the URL --}}
                <li><a class="hover:text-gray-200 hover:ml-4" href="{{route('home')}}">Home</a></li>
                <li><a class="hover:text-gray-200 hover:mr-4" href="{{route('about-us')}}">About</a></li>
            </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="https://wa.me/+237694525931">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a class="pl-6" href="https://github.com/Nde-Dilan/">
                <i class="fab fa-github"></i>
            </a>
            <a class="pl-6" href="https://www.linkedin.com/in/nde-dilan/">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>

</nav>

<x-header></x-header>

<!-- Topic Nav -->
<x-nav-bar></x-nav-bar>
   @endauth


    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}



    </div>

    <footer class="w-full border-t bg-white pb-12 blue-900">
        {{-- TODO: Fetch tech related images and assign them to some post, like that a user can be redirected to a post with an imgae --}}
        {{-- <div class="relative w-full flex items-center invisible md:visible md:pb-12" x-data="getCarouselData()">
            <button
                class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button
                class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                x-on:click="increment()">
                &#8594;
            </button>
        </div> --}}
        {{-- TODO: Using bootstrap or tailwindcss customize the footer --}}
        <div class="w-full blue-900 container mx-auto flex flex-col items-center">
            <div class="flex text-sm md:font-bold md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="{{route('about-us')}}" class="uppercase px-3">About Us</a>
                <a href="{{route('about-us')}}" class="uppercase px-3">Privacy Policy</a>
                <a href="{{route('about-us')}}" class="uppercase px-3">Terms & Conditions</a>
                <a href="{{route('about-us')}}" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; techwithdilan.com</div>
            <p>2024, All rights reserved.</p>
        </div>
    </footer>

    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>

</body>

</html>
