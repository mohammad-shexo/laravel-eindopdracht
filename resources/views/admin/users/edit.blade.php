<x-app-layout>
    <div class="max-w-xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Edit User
        </h1>

        <div class="bg-white border rounded shadow-sm p-6">
            <form method="POST"
                  action="{{ route('admin.users.update', $user) }}"
                  class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input name="name"
                           value="{{ $user->name }}"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input name="email"
                           value="{{ $user->email }}"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox"
                           name="is_admin"
                           {{ $user->is_admin ? 'checked' : '' }}
                           class="rounded border-gray-300">
                    <span class="text-sm">Admin user</span>
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                        Save
                    </button>

                    <a href="{{ route('admin.users.index') }}"
                       class="px-4 py-2 border rounded text-gray-700 hover:bg-gray-100">
                        Cancel
                    </a>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
