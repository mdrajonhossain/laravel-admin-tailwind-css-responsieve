<x-admin_layout>

    <div class="block md:flex">


        <x-leftbar />

        <!-- Main Content Body -->
        <main class="flex-grow p-4">
            <div class="container mx-auto">
                <form action="/addform" method="post" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Father's Name Input -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="fname">Father's Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Father's Name"
                            value="{{ old('fname') }}"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('fname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mother's Name Input -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="mname">Mother's Name</label>
                        <input type="text" id="mname" name="mname" placeholder="Mother's Name"
                            value="{{ old('mname') }}"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('mname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </main>

    </div>







</x-admin_layout>