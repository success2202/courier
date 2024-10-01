<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            background-color: #ff5733;
            color: white;
            text-align: center;
            padding: 10px 0;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .header h1 {
            margin: 0;
        }
        .header img {
            width: 50px;
            vertical-align: middle;
        }
        .section {
            margin: 20px 0;
        }
        .section-header {
            background-color: #00b8e6;
            color: white;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
        }
        .section-content {
            padding: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h1>Delivery Receipt</h1>
        <img src="{{asset('assets/'.$settings->logo)}}" alt="ABC Delivery Logo">
    </div>

    {{-- {{dd($data)}} --}}
    <!-- Customer Information Section -->
    <div class="section">
        <div class="section-header">Customer Information</div>
        <div class="section-content">
            <table>
                <tr>
                    <th>Sender Name</th>
                    <td>{{$data['sender_name']}}</td>
                    <th>Sender Email</th>
                    <td>{{$data['sender_email']}}</td>
                </tr>
                <tr>
                <tr>
                    <th>Receiver Name</th>
                    <td>{{$data['receiver_name']}}</td>
                    <th>Receipt Number</th>
                    <td>{{$data['invoice_id']}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$data['receiver_name']}}</td>
                    <th>Delivery Date</th>
                    <td>{{$data['pick_date']}}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{$data['receiver_phone']}}</td>
                    <th>Delivery Address</th>
                    <td>{{$data['receiver_address']}}</td>
                </tr>
                <tr>
                    <th>Tracking Code</th>
                    <td>{{$data['tracking_info']['const_no']}}</td>
                    <th>Delivery Address</th>
                    <td>{{$data['receiver_address']}}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Order Details Section -->
    <div class="section">
        <div class="section-header">Order Details</div>
        <div class="section-content">
            <table>
                <thead>
                    <tr>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data['product']}}</td>
                        <td>{{$data['qty']}}</td>
                        <td>{{$data['amount']}}</td>
                        <td>{{$data['frieght']}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th>{{$data['amount']}}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        Thank you for choosing {{$settings->site_name}} {{$settings->copyright}}
    </div>
</div>

</body>
</html>
