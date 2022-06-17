@props(['name'])
<div class="flex items-center">
    <input
        class="mr-2"
        type="checkbox"
        name="{{ $name }}"
        id="{{ $name }}" {{ old($name) ? 'checked' : '' }}
    >
    <x-form.label :name="$name"/>
</div>
