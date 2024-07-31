{{--@extends('layouts.app')--}}

{{--@section('header')--}}
{{--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--        {{ __('Dashboard') }}--}}
{{--    </h2>--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <div class="container mx-auto">--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-lg">--}}
{{--            <h3 class="text-lg font-medium">Welcome to the Asistencia page</h3>--}}
{{--            <p class="mt-4">Code hereeee</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asistencia header hereee') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-1xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('asistencia')
            </div>
        </div>
    </div>
</x-app-layout>

