<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard hereee') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-1xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               {{-- <x-welcome /> --}}
               @livewire('roles',['user'=> Auth::user()->id ])
            </div>
        </div>
    </div>
</x-app-layout>
