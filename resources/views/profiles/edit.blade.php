<x-app-layout>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')


        <input type="text" name="username" value="{{ old('username', $user->username) }}">
        <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}">
        <textarea name="about">{{ old('about', $user->about) }}</textarea>
        <input type="file" name="profile_photo">

        <button type="submit">Save</button>
    </form>
</x-app-layout>
