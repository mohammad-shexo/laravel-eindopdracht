<x-app-layout>
    <div class="max-w-3xl mx-auto px-4 py-8">

        <div class="bg-white border rounded shadow-sm p-6 flex flex-col md:flex-row gap-6">

            {{-- Profile photo --}}
            @if($user->profile_photo)
                <div class="shrink-0">
                    <img src="{{ asset('storage/'.$user->profile_photo) }}"
                         class="w-36 h-36 rounded-full object-cover border">
                </div>
            @endif

            {{-- Profile info --}}
            <div class="flex-1">
                <h1 class="text-2xl font-bold mb-2">
                    {{ $user->username ?? $user->name }}
                </h1>

                <p class="text-sm text-gray-500 mb-4">
                    <strong>Birthday:</strong> {{ $user->birthday }}
                </p>

                <div class="prose max-w-none">
                    {{ $user->about }}
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
