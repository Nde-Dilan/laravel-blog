    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">

        <div class="block sm:hidden">
    
            <a href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open">
    
                Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-2"></i>
    
            </a>
    
        </div>
    
        <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
    
            <div
                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                @foreach ($topics as $topic)
                    <a href="#" class="hover:bg-blue-400 rounded py-2 px-4 mx-2">{{ $topic->title }}</a>
                @endforeach
            </div>
    
        </div>
    
    </nav>
    