<html>
<head>
<title>Your Item is Being Delivered</title>

<style>
* {font: 15px arial}

</style>

<body>

<p>Dear {{$order->firstname . ' ' . $order->lastname}},</p>
	<p>Order # {{str_pad($order->id, 10, '0', STR_PAD_LEFT)}}<br>

		<p>Your Package Item are now being shipped.</p><br>

<p>

		Your Order will be Delivered to	<br>
	</p>
			<p>{{$order->firstname . ' ' . $order->lastname}}<br>
			Cell Number: {{$order->mobilenumber}}<br>
			Email: {{$order->email}}
</p>
<body>
<html>