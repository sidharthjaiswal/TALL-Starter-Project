<x-app-layout>
    <br>
    <div class="bg-grey">
        <x-slot name="header">
            <p class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </p>
        </x-slot>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <br>
                <div class="bg-white overflow-scroll shadow-sm sm:rounded-lg">
                    <livewire:home>
                </div>
            </div>
    </div>
</x-app-layout>