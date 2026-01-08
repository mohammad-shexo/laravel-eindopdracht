<x-app-layout>
    <h1>{{ $user->username ?? $user->name }}</h1>

    @if($user->profile_photo)
        <img src="{{ asset('storage/'.$user->profile_photo) }}" width="150">
    @endif

    <p><strong>Birthday:</strong> {{ $user->birthday }}</p>
    <p>{{ $user->about }}</p>
</x-app-layout>
