<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Categories</h1>
        <ul class="list-disc pl-6">
            @forelse ($categories as $category)
                <li class="py-1">{{ $category->name }}</li>
            @empty
                <li>No categories found.</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>