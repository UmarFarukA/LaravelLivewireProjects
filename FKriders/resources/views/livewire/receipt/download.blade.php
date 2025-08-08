<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Receipt # {{ $payment->id }}</title>
    {{--
    <link rel="stylesheet" href="{{ asset(" pdf.css") }}" type="text/css"> --}}
</head>
<style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 13px;
        color: #333;
        padding: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 16px;
    }

    .header h1 {
        margin-bottom: 5px;
        font-size: 22px;
    }


    .header h2 {
        margin-top: 5px;
        margin-bottom: 4px;
        font-size: 20px;
    }

    .header p {
        font-size: 12px;
    }

    .details,
    .items {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .details td,
    .items th,
    .items td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .items th {
        background-color: #f0f0f0;
    }

    .footer {
        margin-top: 30px;
        text-align: center;
        font-style: italic;
        font-size: 12px;
    }
</style>

<body>
    <div class="header">
        <img src="{{ public_path('fkryders.png') }}" alt="FK Ryders System" width="200" />
        <h1>FK Ryders System.</h1>
        <p> www.fkryders.com | info@fkryders.com | +2348099909990</p>

        <h2>Payment Receipt</h2>
    </div>

    <table class="details">
        <tr>
            <td><strong>Receipt No:</strong> {{ $payment->week_number }}</td>
            <td><strong>Date:</strong> {{ $payment->created_at->format('d-M-Y') }}</td>
        </tr>
        <tr>
            <td><strong>Paid By:</strong> {{ $payment->user->fname }} {{ $payment->user->lname }}</td>
            <td><strong>Reference:</strong> {{ $payment->payment_reference }}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Email:</strong> {{ $payment->user->email }}</td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount (₦)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Weekly dues for tricycle (<em>{{ $payment->allocation->tricycle->model_number}}</em>) services </td>
                <td>{{ number_format($payment->amount, 2) }}</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>₦{{ number_format($payment->amount, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        Thank you for your payment.
        &copy;FKRyders Systems.
    </div>
</body>

</html>
