<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-6">
            Contact
        </h1>

        @if(session('success'))
            <div class="mb-6 p-4 border border-green-200 rounded bg-green-50 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="p-6 border rounded shadow-sm bg-white">

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Name
                    </label>
                    <input name="name"
                           placeholder="Your name"
                           required
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Email
                    </label>
                    <input name="email"
                           type="email"
                           placeholder="Your email"
                           required
                           class="w-full border rounded px-3 py-2">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium mb-1">
                        Message
                    </label>
                    <textarea name="message"
                              placeholder="Your message"
                              required
                              rows="5"
                              class="w-full border rounded px-3 py-2"></textarea>
                </div>

                <button class="px-4 py-2 bg-blue-600 text-green-600 rounded hover:bg-blue-700">
                    Send
                </button>
            </form>

        </div>

    </div>
</x-app-layout>
