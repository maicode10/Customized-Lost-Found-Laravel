<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Lost & Found Items</h1>
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Category</th>
                    <th class="border p-2">Location Found</th>
                    <th class="border p-2">Date Found</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr>
                    <td class="border p-2">{{ $item->name }}</td>
                    <td class="border p-2">{{ $item->category->name }}</td>
                    <td class="border p-2">{{ $item->location_found }}</td>
                    <td class="border p-2">{{ $item->date_found }}</td>
                    <td class="border p-2">{{ ucfirst($item->status) }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center p-4">No items found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>