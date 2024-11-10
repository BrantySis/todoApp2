<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Dashboard Card with Shadow and Rounded Corners -->
            <div class="bg-white shadow-lg sm:rounded-xl">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold mb-4">{{ __("You're logged in!") }}</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
