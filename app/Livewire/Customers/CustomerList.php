<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public $customers;

    public function mount(): void
    {
        $this->customers = Customer::orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.customers.customer-list')
            ->layout('layouts.app');
    }
}