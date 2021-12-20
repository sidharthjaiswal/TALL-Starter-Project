<x-app-layout>
    <br>
    <div class="bg-white dark:bg-black">
        <x-slot name="header">
            <p class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </p>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <br>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <livewire:home>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>