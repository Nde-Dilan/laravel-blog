<?php

/**  @var $postsPagination \Illuminate\Pagination\LengthAwarePaginator*/
// dd($posts[0]->categories);

?>

<x-app-layout meta-description="Tech with dilan's personal blog">
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach ($posts as $post)
           
                <x-post-item :post="$post" />
           
        @endforeach
        <!-- Pagination -->
        {{ $posts }}
        {{-- {{ $posts->onEachSide(2)->links() }} --}}
    </section>
   <x-side-bar></x-side-bar>
</x-app-layout>
