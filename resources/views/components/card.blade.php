
{{-- /* Using the $slot to allow this component to wrapp other elements*/ --}}

{{-- TODO: Try to arrange this to have a somewhat beautifull background --}}
<div {{$attributes->merge(['class'=>'m-3 sky-500 dark:bg-zinc-300 border border-blue-200 rounded p-6  '])}}>
    {{$slot}}
</div>
{{-- /* Using the $attributes to allow our component to accept classes(in general attributes not just classes), and merge them with the default ones.*/ --}}