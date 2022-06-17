@props(['name'])
@error($name)
<span class="text-xs text-red-600" role="alert">{{ $message }}</span>
@enderror
