<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

return new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = 'user';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:user,admin,employer'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if (User::count() === 0) {
            $validated['role'] = 'admin';
        }

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $redirectRoute = match ($user->role) {
            'admin' => 'admin.dashboard',
            'user' => 'user.dashboard',
            'employer' => 'employer.dashboard',
            default => null,
        };

        if (! $redirectRoute) {
            abort(403);
        }

        $this->redirect(route($redirectRoute, absolute: false), navigate: true);
    }
};
