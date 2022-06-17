@props(['name'])
<label for="name" class="ml-1 text-sm">{{ str_replace('_', ' ', ucfirst($name)) }}</label>
