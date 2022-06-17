@props(['name', 'type'=>'text'])
<div>
    <x-form.label :name="$name"/>
    <input
        id="{{ $name }}"
        type="{{ $type }}"
        class="px-4 py-2 border rounded-lg w-full @error($name) border-red-500 @enderror"
        name="{{ $name }}"
        {{ $attributes }}
    >
    <x-form.error :name="$name"/>
</div>
