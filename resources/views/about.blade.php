<x-app-layout meta-title="TechWithDilan's Blog - About Us Page"  meta-description="Learn more about techwithdilan, let's code it" meta-keywords="Dilan tech youtube blog ict computer science java python programming ">

    <section class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">

        <article class="flex flex-col flex-wrap ml-2 shadow my-4">
            <!-- Our Image -->
            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{ $widget->image }}">
            </a>
            <div class="bg-white flex flex-wrap flex-col justify-start p-6">
              
                <h1 href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $widget->title }}</h1>
               
                {!! html_entity_decode($widget->content) !!}
            </div>
        </article>
        <x-user-card></x-user-card>

    </section>

</x-app-layout>
