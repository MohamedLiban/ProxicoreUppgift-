<div>
    <div class="p-4 font-bold text-xl">
        Proxicore
    </div>
    <nav class="px-4 space-y-2">
        <a href="{{ route('customers.index') }}"
           class="block py-2 px-3 rounded hover:bg-gray-100 {{ request()->routeIs('customers.index') ? 'bg-gray-200 font-semibold' : '' }}">
            Kundlista
        </a>
        <a href="{{ route('customers.create') }}"
           class="block py-2 px-3 rounded hover:bg-gray-100 {{ request()->routeIs('customers.create') ? 'bg-gray-200 font-semibold' : '' }}">
            Kunddetaljer (ny)
        </a>
    </nav>
</div>