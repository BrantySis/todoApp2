<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg dark:bg-gray-800 sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    {{-- Header --}}
                    <div class="flex flex-col gap-y-2 mb-6">
                        <h1 class="text-2xl font-bold">Student Information</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Fill out this form to create a new student</p>
                    </div>

                    {{-- Create Student Form --}}
                    <form wire:submit.prevent="store" class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium dark:text-gray-300">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    wire:model.defer="form.name" 
                                    class="w-full px-4 py-3 text-sm border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 
                                    @error('form.name') border-red-500 focus:ring-red-500 @enderror" 
                                    placeholder="Enter student name"
                                >
                                @error('form.name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium dark:text-gray-300">Email</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    wire:model.defer="form.email" 
                                    class="w-full px-4 py-3 text-sm border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 
                                    @error('form.email') border-red-500 focus:ring-red-500 @enderror" 
                                    placeholder="Enter student email"
                                >
                                @error('form.email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Class Field -->
                            <div>
                                <label for="class_id" class="block mb-2 text-sm font-medium dark:text-gray-300">Class</label>
                                <select 
                                    id="class_id" 
                                    wire:model.defer="form.class_id"
                                    class="w-full px-4 py-3 text-sm border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 
                                    @error('form.class_id') border-red-500 focus:ring-red-500 @enderror">
                                    <option value="">Select a class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                @error('form.class_id')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                           <!-- Section Field -->
                                <div>
                                 <label for="section" class="block mb-2 text-sm font-medium dark:text-gray-300">Section</label>
                                    <select 
                                          id="section" 
                                         wire:model.defer="form.section_id"
                                     class="w-full px-4 py-3 text-sm border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 
                                          @error('form.section_id') border-red-500 focus:ring-red-500 @enderror">
                                  <option value="">Select a section</option>
        
                              <!-- Debugging: Ensure $sections is populated -->
                                   @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                               @endforeach
                                
                                 </select>
    
                                @error('form.section_id')
                                         <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                 @enderror
                            </div>

                        <!-- Action Buttons -->
                        <div class="flex justify-end gap-x-3 mt-6">
                            <a href="{{ route('students.index') }}" class="inline-flex items-center px-5 py-3 text-sm font-medium text-indigo-600 bg-indigo-100 rounded-lg hover:bg-indigo-200 dark:bg-indigo-900 dark:text-indigo-400 dark:hover:bg-indigo-800">
                                Cancel
                            </a>
                            <button type="submit" class="px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">
                                Save
                            </button>
                        </div>
                    </form>
                    {{-- End of Create Student Form --}}
                </div>
            </div>
        </div>
    </div>
</div>
