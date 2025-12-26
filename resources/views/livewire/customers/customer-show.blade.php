@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">
        Kunddetaljer
    </h1>

    <div class="bg-white p-6 rounded shadow max-w-lg space-y-3">
        <div>
            <span class="font-semibold">Namn:</span>
            <span>{{ $customer->name }}</span>
        </div>
        <div>
            <span class="font-semibold">Adress:</span>
            <span>{{ $customer->address ?? '-' }}</span>
        </div>
        <div>
            <span class="font-semibold">Typ:</span>
            <span>{{ $customer->type?->label() ?? '-' }}</span>
        </div>
        <div>
            <span class="font-semibold">Skapad:</span>
            <span>{{ $customer->created_at->format('Y-m-d H:i') }}</span>
        </div>

        <div class="pt-4 flex space-x-3">
            <a href="{{ route('customers.edit', $customer) }}"
               class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Redigera
            </a>
            <a href="{{ route('customers.index') }}"
               class="px-3 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                Tillbaka till lista
            </a>
        </div>
    </div>
@endsection