<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 py-8">

        <h1 class="text-2xl font-bold mb-8">
            Frequently Asked Questions
        </h1>

        @forelse($categories as $category)
            <section class="p-6 border rounded shadow-sm bg-white mb-6">

                <h2 class="text-xl font-semibold mb-4">
                    {{ $category->name }}
                </h2>

                @forelse($category->faqs as $faq)
                    <div class="mb-4 pl-4 border-l">

                        <p class="font-medium mb-1">
                            {{ $faq->question }}
                        </p>

                        <p class="text-gray-700">
                            {{ $faq->answer }}
                        </p>

                    </div>
                @empty
                    <p class="italic text-gray-500">
                        No questions in this category.
                    </p>
                @endforelse

            </section>
        @empty
            <p class="text-gray-500">
                No FAQ categories found.
            </p>
        @endforelse

    </div>
</x-app-layout>
