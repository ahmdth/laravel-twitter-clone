@props(['name'=>''])
<label for="name" class="ml-1 text-sm capitalize">{{ str_replace('_', ' ', $name) ?? $slot }}</label>
