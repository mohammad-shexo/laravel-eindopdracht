<x-app-layout>
    <h1>Users</h1>

    <a href="{{ route('admin.users.create') }}">Create user</a>

    <table>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
