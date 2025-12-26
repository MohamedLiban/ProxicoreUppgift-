@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">
        {{ $isEdit ? 'Redigera kund' : 'Skapa ny kund' }}
    </h1>

    <form wire:submit.prevent="save" class="max-w-lg space-y-4 bg-white p-6 rounded shadow">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">
                Namn
            </label>
            <input
                id="name"
                type="text"
                wire:model.defer="name"
                class="mt-1 block w-full border rounded px-3 py-2 @error('name') border-red-500 @else border-gray-300 @enderror"
            >
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">
                Adress
            </label>
            <textarea
                id="address"
                wire:model.defer="address"
                rows="3"
                class="mt-1 block w-full border rounded px-3 py-2 @error('address') border-red-500 @else border-gray-300 @enderror"
            ></textarea>
            @error('address')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">
                Kundtyp
            </label>
            <select
                id="type"
                wire:model.defer="type"
                class="mt-1 block w-full border rounded px-3 py-2 @error('type') border-red-500 @else border-gray-300 @enderror"
            >
                @foreach($types as $enum)
                    <option value="{{ $enum->value }}">{{ $enum->label() }}</option>
                @endforeach
            </select>
            @error('type')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button
                type="submit"
                wire:loading.attr="disabled"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 disabled:opacity-50"
            >
                <span wire:loading.remove>Spara</span>
                <span wire:loading>Sparar...</span>
            </button>

            <a href="{{ route('customers.index') }}" class="text-gray-600 hover:underline">
                Tillbaka till kundlista
            </a>
        </div>
    </form>
@endsection