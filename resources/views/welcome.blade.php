<x-app-layout>
    <div class="max-w-4xl mx-auto py-12 px-6">

        <h1 class="text-3xl font-bold mb-4">
            Welkom op {{ config('app.name') }}
        </h1>

        <p class="text-gray-600 mb-6">
            Dit is de homepagina van onze website.
            Hier vind je nieuws, veelgestelde vragen en meer informatie.
        </p>

        <div class="flex gap-4">
            <a href="{{ route('news.index') }}"
               class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
                Bekijk nieuws
            </a>

            <a href="{{ route('faq.index') }}"
               class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                Bekijk FAQ
            </a>
        </div>

    </div>
</x-app-layout>
