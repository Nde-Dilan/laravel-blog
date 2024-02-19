{{-- Since app layout is accepting some params as meta-title and description, we can pass them right here --}}

<x-app-layout :meta-title="$post->meta_title ?: $post->title"  :meta-description="$post->meta_description ?: $post->shortText()" :meta-keywords="$post->meta_keywords ?: $post->title">


    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="{{ $post->getThumbnail() }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex flex-row justify-between">
                    @foreach ($post->categories as $category)
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"> {{ $category->title }} </a>
                    @endforeach
                </div>
                <h1 href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</h1>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800"> {{ $post->user->name }} </a>,
                    Published on
                    {{ $post->getFormattedDate() }}
                </p>

                {!! html_entity_decode($post->body) !!}
            </div>
        </article>

        <div class="w-full flex pt-6">
            @if ($previousPost)
                <a href="{{ route('view', $previousPost) }}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                        Previous
                    </p>
                    <p class="pt-2">{{ $previousPost->title }}</p>
                </a>
            @else
                <button class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg disabled text-blue-800 font-bold flex items-center"><i
                            class="fas fa-arrow-left pr-1"></i>
                        Previous
                    </p>
                    <p class="pt-2">🚨 No previous post</p>
                </button>
            @endif
            @if ($nextPost)
                <a href="{{ route('view', $nextPost) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                            class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">{{ $nextPost->title }}</p>
                </a>
            @else
                <button class="w-1/2 disabled bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                            class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">No next post 🚩</p>
                </button>
            @endif


        </div>

        <x-user-card></x-user-card>

    </section>
    <x-side-bar></x-side-bar>

</x-app-layout>
