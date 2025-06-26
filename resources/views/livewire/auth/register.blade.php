

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus />
        <flux:input wire:model="email" :label="__('Email address')" type="email" required />
        <flux:input wire:model="password" :label="__('Password')" type="password" required viewable />
        <flux:input wire:model="password_confirmation" :label="__('Confirm password')" type="password" required viewable />

        @if (\App\Models\User::count() > 0)
            <div class="flex flex-col gap-2">
                <label for="role" class="text-sm">Role</label>
                <select wire:model="role" id="role" class="rounded border">
                    <option disabled selected value="">Select role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="employer">Employer</option>
                </select>
                @error('role') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
        @else
            <input type="hidden" wire:model="role" value="admin">
        @endif

        <flux:button type="submit" variant="primary" class="w-full">
            {{ __('Create account') }}
        </flux:button>
    </form>

    <div class="text-center text-sm">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
