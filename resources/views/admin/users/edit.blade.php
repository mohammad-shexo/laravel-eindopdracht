<x-app-layout>
    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $user->name }}">
        <input name="email" value="{{ $user->email }}">

        <label>
            <input type="checkbox" name="is_admin" {{ $user->is_admin ? 'checked' : '' }}>
            Admin
        </label>

        <button>Save</button>
    </form>
</x-app-layout>
