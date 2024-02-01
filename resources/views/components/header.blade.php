  <!-- Text Header -->
  <header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        {!! html_entity_decode( \App\Models\TextWidget::getContent('header')) !!} 
    </div>
</header>
