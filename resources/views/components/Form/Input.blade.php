@props(['name', 'type'=>'text'])
<div class="w-full">
    <x-form.label :name="$name"/>
    <input
        id="{{ $name }}"
        type="{{ $type }}"
        class="px-4 py-2 border rounded-lg w-full border focus:outline-none focus:ring-2 @error($name) border-red-500 @enderror"
        name="{{ $name }}"
        {{ $attributes }}
    >
    <x-form.error :name="$name"/>
</div>
