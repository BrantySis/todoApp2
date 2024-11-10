<form wire:submit='store'>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- Name -->
        <div>
            <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
            <input type="text" id="name" wire:model="form.name" class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
            @error('form.name') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
            <input type="email" id="email" wire:model="form.email" class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
            @error('form.email') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Class -->
        <div>
            <label for="class_id" class="block mb-2 text-sm font-medium dark:text-white">Class</label>
            <select id="class_id" wire:model="form.class_id" class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                <option value="">Select a class</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
            @error('form.class_id') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Section -->
        <div>
            <label for="section_id" class="block mb-2 text-sm font-medium dark:text-white">Section</label>
            <select id="section_id" wire:model="form.section_id" class="block w-full px-4 py-3 text-sm rounded-lg border-gray-200 focus:border-blue-500 focus:ring-blue-500">
                <option value="">Select a section</option>
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
            @error('form.section_id') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>
    </div>

    <div class="flex justify-end mt-4 gap-x-3">
        <a href="{{ route('students.index') }}" class="inline-flex items-center px-4 py-3 text-sm font-medium text-indigo-800 bg-indigo-100 border border-transparent rounded-lg gap-x-2 hover:bg-indigo-200 focus:outline-none focus:bg-indigo-200 disabled:opacity-50">
            Cancel
        </a>
        <button type="submit" class="px-4 py-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-lg hover:bg-indigo-700">
            Save
        </button>
    </div>
</form>




