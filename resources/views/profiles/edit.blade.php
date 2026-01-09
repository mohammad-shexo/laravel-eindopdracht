<x-app-layout>
    <div class="max-w-3xl mx-auto px-4 py-8">

        <div class="bg-white border rounded shadow-sm p-6">
            <h1 class="text-2xl font-bold mb-6">
                Edit profile
            </h1>

            <form method="POST"
                  action="{{ route('profile.update') }}"
                  enctype="multipart/form-data"
                  class="space-y-6">

                @csrf
                @method('PATCH')

                {{-- Username --}}
                <div>
                    <label class="block text-sm font-medium mb-1">
                        Username
                    </label>
                    <input type="text"
                           name="username"
                           value="{{ old('username', $user->username) }}"
                           class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                    @error('username')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>

                {{-- Birthday --}}
                <div>
                    <label class="block text-sm font-medium mb-1">
                        Birthday
                    </label>
                    <input type="date"
                           name="birthday"
                           value="{{ old('birthday', $user->birthday) }}"
                           class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- About --}}
                <div>
                    <label class="block text-sm font-medium mb-1">
                        About
                    </label>
                    <textarea name="about"
                              rows="5"
                              class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">{{ old('about', $user->about) }}</textarea>
                </div>

                {{-- Profile photo --}}
                <div>
                    <label class="block text-sm font-medium mb-1">
                        Profile photo
                    </label>
                    <input type="file"
                           name="profile_photo"
                           class="block w-full text-sm text-gray-600">
                </div>

                {{-- Submit --}}
                <div class="pt-4">
                    <button type="submit"
                            class="bg-blue-600 text-black px-6 py-2 rounded hover:bg-blue-700 transition">
                        Save
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>
