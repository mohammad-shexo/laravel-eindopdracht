<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">
                Users
            </h1>

            <a href="{{ route('admin.users.create') }}"
               class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                ➕ Create user
            </a>
        </div>

        <div class="bg-white border rounded shadow-sm overflow-x-auto">
            <table class="w-full border-collapse">
                <thead class="bg-gray-100">
                <tr>
                    <th class="text-left px-4 py-2 border-b">
                        Email
                    </th>
                    <th class="text-left px-4 py-2 border-b">
                        Role
                    </th>
                    <th class="text-left px-4 py-2 border-b">
                        Actions
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b">
                            {{ $user->email }}
                        </td>

                        <td class="px-4 py-2 border-b">
                                <span class="inline-block px-2 py-1 text-xs rounded
                                    {{ $user->is_admin ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                                    {{ $user->is_admin ? 'Admin' : 'User' }}
                                </span>
                        </td>

                        <td class="px-4 py-2 border-b">
                            <a href="{{ route('admin.users.edit', $user) }}"
                               class="text-blue-600 hover:underline">
                                ✏ Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
