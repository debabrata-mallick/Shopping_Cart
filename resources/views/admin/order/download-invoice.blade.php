<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Billing Info</h1>
    <table border="1">
        <tr>
            <th>Customer Name</th>
            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $customer->phone_number }}</td>
        </tr>
    </table>
    <h1>Shipping Info</h1>
    <table border="1">
        <tr>
            <th>Customer Name</th>
            <td>{{ $shipping->full_name}}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $shipping->phone_number }}</td>
        </tr>
    </table>
    <h1>Product Info</h1>
    <table border="1">
        <tr>
            <th>Sl No</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
        </tr>
        @php($i=1)
        @foreach($orderDetails as $orderDetail)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $orderDetail->product_id }}</td>
                <td>{{ $orderDetail->product_name }}</td>
                <td>TK. {{ $orderDetail->product_price }}</td>
                <td>{{ $orderDetail->product_quantity }}</td>
                <td>TK. {{ $orderDetail->product_price*$orderDetail->product_quantity }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>