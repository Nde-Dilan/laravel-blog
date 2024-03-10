 <!-- Sidebar Section -->
 <aside class="w-full md:w-1/3 right_section flex flex-col items-center px-3">


    <div class="w-full bg-white shadow flex flex-col flex-wrap my-4 p-6">
         <h3 class="text font-semibold mb-3">All Categories</h3>

         @foreach ($categories as $category)
         {{-- We want to check if a particular category has been selected or not to mark it how we want it to be --}}
         <a href="{{route('by-category',$category)}}" class="text-semibold uppercase block py-2 px-3 rounded
         {{request('category')?->slug === $category->slug ? 'bg-gradient-to-r from-cyan-500 to-blue-500' : ''}}"> {{ $category->title }} ({{ ($category->total)}}) </a>
         @endforeach

     </div>
     <div class="w-full bg-white shadow flex flex-col my-4 p-6">
         <p class="text-xl font-semibold pb-5"> {{ \App\Models\TextWidget::getTitle('about-me-sidebar') }} </p>
         <p class="p-2 m-2"> {!! html_entity_decode(\App\Models\TextWidget::getContent('about-me-sidebar')) !!} </p>
         {{-- DONE: add these tailwindCSS classes to the admin panel --}}
     </div>
 </aside>
