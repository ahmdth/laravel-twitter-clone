@extends('layouts.app')

@section('content')
    <x-publish-tweet></x-publish-tweet>
    <x-timeline :tweets="$tweets"></x-timeline>
@endsection
