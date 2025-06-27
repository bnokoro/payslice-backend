<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">My Payslips</h2>
    </x-slot>

    <div class="p-6 space-y-4">
        @forelse ($payslips as $payslip)
            <div class="p-4 border rounded shadow">
                <h3 class="text-lg font-semibold">Payslip for {{ \Carbon\Carbon::parse($payslip->month)->format('F Y') }}</h3>
                <p><strong>Amount:</strong> ₦{{ number_format($payslip->amount) }}</p>
                <p><strong>Employer:</strong> {{ $payslip->employer->name ?? 'N/A' }}</p>
                <a href="{{ route('user.payslips.pdf', $payslip->id) }}" class="text-blue-500 hover:underline">Download PDF</a>
            </div>
        @empty
            <p>No payslips found.</p>
        @endforelse
    </div>
</x-app-layout>
