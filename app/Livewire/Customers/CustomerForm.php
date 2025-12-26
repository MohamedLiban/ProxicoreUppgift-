<?php

namespace App\Livewire\Customers;

use App\Enums\CustomerType;
use App\Models\Customer;
use Livewire\Component;

class CustomerForm extends Component
{
    public ?Customer $customer = null;

    public string $name = '';
    public ?string $address = null;
    public string $type = 'prospect';

    public bool $isEdit = false;

    protected function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:500'],
            'type'    => ['required', 'in:prospect,active,inactive'],
        ];
    }

    public function mount(?Customer $customer = null): void
    {
        if ($customer && $customer->exists) {
            $this->customer = $customer;
            $this->name     = $customer->name;
            $this->address  = $customer->address;
            $this->type     = $customer->type->value;
            $this->isEdit   = true;
        } else {
            $this->isEdit = false;
        }
    }

    public function save(): void
    {
        $validated = $this->validate();
        $validated['type'] = CustomerType::from($this->type);

        if ($this->isEdit && $this->customer) {
            $this->customer->update($validated);
            session()->flash('success', 'Kunden har uppdaterats.');
        } else {
            $this->customer = Customer::create($validated);
            $this->isEdit   = true;
            session()->flash('success', 'Kunden har skapats.');
        }

        $this->redirectRoute('customers.edit', $this->customer);
    }

    public function render()
    {
        return view('livewire.customers.customer-form', [
            'types' => CustomerType::cases(),
        ])->layout('layouts.app');
    }
}