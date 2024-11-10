<div class="bg-gray-900 min-h-screen text-gray-100">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-100">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Updated Add Student Link with wire:navigate -->
            <a href="{{ route('students.create') }}" wire:navigate 
               class="inline-flex items-center px-4 py-3 mb-4 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-lg shadow-md gap-x-2 hover:bg-teal-700 focus:outline-none focus:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none">
                Add Student
            </a>

            <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-700" id="paginated-students">
                                        <thead class="bg-gray-700">
                                            <tr>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-start">ID</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-start">Name</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-start">Email</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-start">Class</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-start">Section</th>
                                                <th class="px-6 py-3 text-xs font-medium text-gray-400 uppercase text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                                <tr class="odd:bg-gray-700 even:bg-gray-600 hover:bg-gray-500">
                                                    <td class="px-6 py-4 text-sm font-medium text-gray-100">{{ $student->id }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-100">{{ $student->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-100">{{ $student->email }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-100">{{ $student->class->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-100">{{ $student->section->name }}</td>
                                                    <td class="px-6 py-4 text-sm font-medium text-end">
                                                        <button type="button" class="inline-flex items-center text-sm font-semibold text-red-500 hover:text-red-700 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                            </svg>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-4">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


