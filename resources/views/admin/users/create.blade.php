<x-app-layout>
    <div class="max-w-xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Create User
        </h1>

        <div class="bg-white border rounded shadow-sm p-6">
            <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input name="name"
                           placeholder="Name"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input name="email"
                           type="email"
                           placeholder="Email"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input name="password"
                           type="password"
                           placeholder="Password"
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox"
                           name="is_admin"
                           class="rounded border-gray-300">
                    <span class="text-sm">Admin user</span>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                        Create
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
