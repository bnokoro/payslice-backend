<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Public route
Route::get('/', fn () => view('welcome'))->name('home');

// Authenticated + Verified users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->isAdmin()) {
            return view('admin.dashboard');
        }
        return view('dashboard');
    })->name('dashboard');

    // Settings
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Admin-only routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
});

// Optional: Separate dashboards by role (if you need custom views)
Route::middleware(['auth', 'role:employer'])->group(function () {
    Route::view('/employer/dashboard', 'dashboard.employer')->name('employer.dashboard');
});


Route::post('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

require __DIR__.'/auth.php';

