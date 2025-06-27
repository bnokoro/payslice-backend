<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payslip</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        .header { text-align: center; margin-bottom: 20px; }
        .summary { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Payslip</h2>
        <p>{{ $payslip->month }}</p>
    </div>

    <div class="summary">
        <p><strong>Employee:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Employer:</strong> {{ $payslip->employer->name ?? 'N/A' }}</p>
        <p><strong>Amount Paid:</strong> ₦{{ number_format($payslip->amount) }}</p>
    </div>
</body>
</html>
