<?php

/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator*/
?>

<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">


        @foreach ($posts as $post)
            <x-card>
                <x-post-item :post="$post" />
            </x-card>
        @endforeach
        <!-- Pagination -->
        {{ $posts->onEachSide(2)->links() }}
        {{ $posts }}
        {{-- {{$posts->onEachSide()->links()}} --}}
    </section>
   <x-side-bar></x-side-bar>
</x-app-layout>
