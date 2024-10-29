<div class="flex flex-col items-center bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 space-y-6">
    <!-- Display the count with a larger font size -->
    <h1 class="text-6xl font-extrabold text-gray-800 dark:text-gray-200">{{ $count }}</h1>
    
    <div class="flex space-x-6">
        <!-- Increase the button size with larger padding, font size, and rounded corners -->
        <button wire:click="increment" class="px-6 py-4 text-2xl bg-green-500 text-white rounded-xl font-semibold hover:bg-green-600 focus:outline-none transition">
            +
        </button>
        <button wire:click="decrement" class="px-6 py-4 text-2xl bg-red-500 text-white rounded-xl font-semibold hover:bg-red-600 focus:outline-none transition">
            -
        </button>
    </div>
</div>

