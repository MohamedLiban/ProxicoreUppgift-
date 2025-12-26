@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Kundlista</h1>

    <div class="mb-4 flex justify-between">
        <a href="{{ route('customers.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Skapa ny kund
        </a>
    </div>

    <div class="bg-white shadow rounded overflow-hidden">
        <table class="min-w-full text-left">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-2 border-b">Namn</th>
                <th class="px-4 py-2 border-b">Typ</th>
                <th class="px-4 py-2 border-b">Skapad</th>
                <th class="px-4 py-2 border-b"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($customers as $customer)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $customer->name }}</td>
                    <td class="px-4 py-2 border-b">
                        {{ $customer->type?->label() ?? '-' }}
                    </td>
                    <td class="px-4 py-2 border-b">{{ $customer->created_at->format('Y-m-d H:i') }}</td>
                    <td class="px-4 py-2 border-b text-right space-x-2">
                        <a href="{{ route('customers.show', $customer) }}"
                           class="text-gray-700 hover:underline">
                            Visa
                        </a>
                        <a href="{{ route('customers.edit', $customer) }}"
                           class="text-blue-600 hover:underline">
                            Redigera
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">
                        Inga kunder hittades.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection