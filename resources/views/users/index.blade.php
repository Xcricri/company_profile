<x-layouts::app :title="__('Admin')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">User</h1>
        @livewire('users', ['users' => $users])
    </div>
</x-layouts::app>
