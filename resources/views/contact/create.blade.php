<x-app-layout>
    <h1>Contact</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <input name="name" placeholder="Your name" required>
        <input name="email" type="email" placeholder="Your email" required>

        <textarea name="message" placeholder="Your message" required></textarea>

        <button>Send</button>
    </form>
</x-app-layout>
