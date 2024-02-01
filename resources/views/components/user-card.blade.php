<div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
        <img src="{{ \App\Models\TextWidget::getImage('user-card') }}"
            class="rounded-full shadow h-32 w-32">
    </div>
    {!! html_entity_decode( \App\Models\TextWidget::getContent('user-card')) !!}
</div>