<x-app-layout>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <input name="name" placeholder="Name">
        <input name="email" type="email" placeholder="Email">
        <input name="password" type="password" placeholder="Password">

        <label>
            <input type="checkbox" name="is_admin"> Admin
        </label>

        <button>Create</button>
    </form>
</x-app-layout>
