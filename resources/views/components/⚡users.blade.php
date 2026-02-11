<?php

use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $users;

    public function mount($users)
    {
        $this->users = $users;
    }

    public function edit($id) {}
};
?>

<div>
    <flux:table>
        <flux:table.columns>
            <flux:table.column>Name</flux:table.column>
            <flux:table.column>Email</flux:table.column>
            <flux:table.column>Action</flux:table.column>
        </flux:table.columns>

        {{-- User data --}}
        @foreach ($users as $user)
            <flux:table.rows>
                <flux:table.row>
                    <flux:table.cell>{{ $user->name }}</flux:table.cell>
                    <flux:table.cell>{{ $user->email }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:modal.trigger name="edit">
                            <flux:badge color="yellow">
                                Edit
                            </flux:badge>
                        </flux:modal.trigger>
                        <flux:badge color="red">Delete</flux:badge>
                        <flux:badge color="cyan">Details</flux:badge>
                    </flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        @endforeach
    </flux:table>


    <flux:modal name="edit" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>
            <flux:input label="Name" placeholder="User name" />
            <flux:input label="Email" placeholder="User email" />
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
