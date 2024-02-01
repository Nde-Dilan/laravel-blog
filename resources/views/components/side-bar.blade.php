 <!-- Sidebar Section -->
 <aside class="w-full md:w-1/3 flex flex-col items-center px-3">


    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text font-semibold mb-3">All Categories</h3>

        
    </div>
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5"> {{ \App\Models\TextWidget::getTitle('about-me-sidebar')}} </p>
        <p class="pb-2"> {!! html_entity_decode(\App\Models\TextWidget::getContent('about-me-sidebar')) !!}   </p>
        {{-- DONE: add these tailwindCSS classes to the admin panel --}}
    </div>
</aside> 