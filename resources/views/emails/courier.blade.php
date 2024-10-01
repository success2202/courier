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

    <!-- Customer Information Section -->
    <div class="section">
        <div class="section-header">Customer Information</div>
        <div class="section-content">
            <table>
                <tr>
                    <th>Name</th>
                    <td></td>
                    <th>Receipt Number</th>
                    <td>002</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>johndoe@noemail.com</td>
                    <th>Delivery Date</th>
                    <td>April 10, 2019</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>(123) 123-4567</td>
                    <th>Delivery Address</th>
                    <td>3383 Public Works Drive, Chattanooga, TN, 37421</td>
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
                        <td>Product A</td>
                        <td>10</td>
                        <td>$50</td>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <td>Product B</td>
                        <td>10</td>
                        <td>$30</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>Product C</td>
                        <td>5</td>
                        <td>$20</td>
                        <td>$100</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th>$900</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        Thank you for choosing ABC Delivery!
    </div>
</div>

</body>
</html>
