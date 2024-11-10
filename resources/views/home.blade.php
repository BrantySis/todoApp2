<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Student Management Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Section Example -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Add New Student Card -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Add New Student</h2>
                    <p class="text-gray-600 mt-1">Quickly add new student records to the database.</p>
                </div>
                <!-- View All Students Card -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900">View Students</h2>
                    <p class="text-gray-600 mt-1">Browse and manage student details in the system.</p>
                </div>
                <!-- Statistics Card -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Statistics</h2>
                    <p class="text-gray-600 mt-1">View key metrics about student demographics and records.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


