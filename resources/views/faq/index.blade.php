<x-app-layout>
    <h1>Frequently Asked Questions</h1>

    @forelse($categories as $category)
        <section style="margin-bottom: 2rem;">
            <h2>{{ $category->name }}</h2>

            @forelse($category->faqs as $faq)
                <div style="margin-left: 1rem; margin-bottom: 1rem;">
                    <p><strong>{{ $faq->question }}</strong></p>
                    <p>{{ $faq->answer }}</p>
                </div>
            @empty
                <p><em>No questions in this category.</em></p>
            @endforelse
        </section>
    @empty
        <p>No FAQ categories found.</p>
    @endforelse
</x-app-layout>
