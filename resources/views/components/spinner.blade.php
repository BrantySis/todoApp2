<div {{ $attributes }} class="relative w-full h-full">
    <!-- Overlay Background -->
    <div class="absolute inset-0 bg-white opacity-50 dark:bg-gray-700"></div>

    <!-- Centered Spinner -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div 
            class="inline-block animate-spin w-12 h-12 border-4 border-current border-t-transparent text-indigo-600 rounded-full dark:text-indigo-500" 
            role="status" 
            aria-label="Loading spinner"
        >
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

