<div class="mb-4">
    <!-- Input Container -->
    <div class="relative">
        <!-- Input Field -->
        <input 
            {{ $attributes }} 
            type="email" 
            class="block w-full px-4 py-3 text-sm bg-gray-100 rounded-lg border border-gray-300 peer ps-11 
                   focus:border-indigo-500 focus:ring-indigo-500 
                   disabled:opacity-50 disabled:pointer-events-none 
                   dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Enter your email"
            aria-label="Email input"
        >
        <!-- Icon Container -->
        <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none peer-disabled:opacity-50">
            <!-- Email Icon -->
            <svg 
                class="text-gray-500 w-5 h-5 shrink-0 dark:text-neutral-500" 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="2" 
                stroke="currentColor"
                aria-hidden="true"
            >
                <path 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.134 3 10 3C13.866 3 17 6.13401 17 10Z"
                />
            </svg>
        </div>
    </div>
</div>
