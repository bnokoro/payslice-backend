<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Payroll;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', fn () => view('dashboards.admin'));
    Route::get('/employer/dashboard', fn () => view('dashboards.employer'));
    Route::get('/user/dashboard', fn () => view('dashboards.user'));
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', fn () => view('dashboards.admin'))->name('admin.dashboard');
    Route::get('/employer/dashboard', fn () => view('dashboards.employer'))->name('employer.dashboard');
    Route::get('/user/dashboard', fn () => view('dashboards.user'))->name('user.dashboard');
});


// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/payslips', function () {
//         $payslips = Payroll::where('user_id', auth()->id())->get();
//         return view('user.payslips.index', compact('payslips'));
//     })->name('user.payslips');
// });

Route::get('/user/payslips/{id}/pdf', function ($id) {
    $payslip = Payroll::where('id', $id)
        ->where('user_id', auth()->id())
        ->firstOrFail();

    $pdf = Pdf::loadView('user.payslips.pdf', compact('payslip'));

    return $pdf->download("Payslip_{$payslip->month}.pdf");
})->name('user.payslips.pdf');

require __DIR__.'/auth.php';
