@props(['name'])
<div>
    <label for="{{ $name }}" class="text-sm">{{ ucfirst($name) }}</label>
    <input id="{{ $name }}"
           type="file"
           class="p-1.5 border-2 border-dashed text-sm cursor-pointer rounded-lg w-full @error($name) border-red-500 @enderror file:bg-blue-200 file:text-blue-600 file:border-0 file:rounded-lg file:text-sm file:mr-3 file:px-2 file:py-1.5"
           name="{{ $name }}">
    @error($name)
    <span class="text-xs text-red-500" role="alert">{{ $message }}</span>
    @enderror
</div>
