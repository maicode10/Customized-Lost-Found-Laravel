<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Claims</h1>
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Item</th>
                    <th class="border p-2">Claimant</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Contact</th>
                    <th class="border p-2">Claim Date</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($claims as $claim)
                <tr>
                    <td class="border p-2">{{ $claim->item->name }}</td>
                    <td class="border p-2">{{ $claim->claimant_name }}</td>
                    <td class="border p-2">{{ $claim->claimant_email }}</td>
                    <td class="border p-2">{{ $claim->claimant_contact }}</td>
                    <td class="border p-2">{{ $claim->claim_date }}</td>
                    <td class="border p-2">{{ ucfirst($claim->status) }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center p-4">No claims found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>