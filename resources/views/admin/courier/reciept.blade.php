@extends('admin.layouts.admin')

<style>
     
        .form-container h2 {
            text-align: left;
            margin-bottom: 20px;
        }
      
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="file"] {
            width: 30%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input[type="file"] {
            padding: 5px;
        }
        .form-group button {
            display: inline;
            width: 30%;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    
.receipt {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 6px 4px 15px rgba(26, 4, 4, 0.1);
    color: #1d1919
}

 .footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
    border-radius: 5px;
}

.header {
    text-align: center;
    padding: 10px;
    background-color: #333;
    border-radius: 5px;
}


.content {
    margin: 20px 0;
}

.content h4 {
    margin-bottom: 12px;
    text-align: center;
}

.details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.details div {
    width: 48%;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

/* Styles for Print */
@media print {
    body {
        margin: 0;
        padding: 0;
        background-color: white;
    }

    .receipt {
        box-shadow: none;
        border: none;
    }

    .no-print {
        display: none;
    }

    .header, .footer {
        background-color: #000; /* Darker background for print */
    }

    .table th, .table td {
        border: 1px solid #000;
    }
}

@media print {
            .no-print {
                display: none;
            }
        }
</style>




       



@section('content')
<article> 

    <!-- Tracking -->
    
       
    
        <div class="form-container">
            {{-- <h2 style="text-align: center;">Enter tracking no</h2> --}}
            <form action="{{route('admin.courier.reciept')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Text Input --><center>
                <div class="form-group">
                    <input type="text" id="name" name="constNo" class="form-control box-shadow" placeholder="Enter your Product ID" required>
                </div>
            
                
                <!-- Submit Button -->
                <div class="form-group">
                    <button class="btn btn-primary">Generate Reciept</button>
                </div>
                            </center>
            </form>
        
        </div><br>
            @if(isset($tracking))


            <div class="receipt" id="printableArea">>
                <div class="header">
                    <a href=""><img style="width: 50px; heigth: 30px;" src="{{asset('/assets/logo.png')}}" alt=""></a>
               
                    <p>Receipt #: 123456</p>
                </div>
            
                <div class="content">
                    <h4>.......Receipt.........</h4> <hr>
            
                    <!-- Sender and Receiver Information -->
                    <div class="details">
                        <div>
                            <h3>Sender</h3>
                            <p><strong>Name:</strong> {{ $tracking->courier->sender_name }}</p>
                            <p><strong>Delivery Address:</strong> {{ $tracking->courier->sender_address }}</p>
                            <p><strong>Phone:</strong> {{ $tracking->courier->sender_phone }}</p>
                            <p><strong>Courier Service:</strong> CGG Courier </p>
                            
                        </div>
                        <div>
                            <h3>Receiver</h3>
                            <p><strong>Name:</strong> {{ $tracking->courier->receiver_name }}</p>
                            <p><strong>Address:</strong> {{ $tracking->courier->receiver_address }}</p>
                            <p><strong>Phone:</strong> {{ $tracking->courier->receiver_phone }}</p>
                            <p><strong>Tracking ID:</strong> <b style="color:rgb(216, 131, 34)"> {{ $tracking->const_no }} </b> </p>
                        </div>
                    </div>
            
                    <!-- Package Details -->
                    <table class="table">
                        <tr>
                            <th>Item</th>
                            <th>Weight kg:</th>
                            <th>Quantity</th>
                            <th>Type</th>
                        </tr>
                        <tr>
                            <td>{{ $tracking->courier->product }}</td>
                            <td>{{ $tracking->courier->weight }}</td>
                            <td>${{ $tracking->courier->qty }}</td>
                            <td>${{ $tracking->courier->type }}</td>
                        </tr>
                    </table>
            
                    <!-- Date and Signature -->
                    <p><strong>Shipping Date:</strong> {{ $tracking->courier->departure_date }}</p>
                    <p><strong>Signature:</strong>..........................</p>
                </div>
            
                <div class="footer">
                    <p>Thank you for using our Courier Company!</p>
                </div>
            </div>
            <br>
            <!-- Print Button -->
        
        <div class="text-center"> <button class="btn btn-primary" class="no-print" onclick="printSection('printableArea')">Print Receipt</button></div>

            @endif
</article>
<script>
     function printSection(divId) {
            var content = document.getElementById(divId).innerHTML;
            var originalContent = document.body.innerHTML;

            // Set the body content to the section's content for printing
            document.body.innerHTML = content;

            // Trigger the print dialog
            window.print();

            // Restore the original content
            document.body.innerHTML = originalContent;
        }
</script>
@endsection