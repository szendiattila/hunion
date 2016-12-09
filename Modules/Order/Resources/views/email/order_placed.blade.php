<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
    <h1>Értesítés ajánlatkérésről!</h1>

    <p><strong>{{ $order->name }} ajánlatot kért</strong></p>
    <p>Az ajánlatkérő e-mail címe: <strong>{{ $order->email }}</strong></p>
    <p>Beérkezés időpontja: {{ $order->created_at }}</p>
    <p><a href="{{ URL::to('/dashboard/order/'. $order->id .'/edit') }}">Itt tudja megtekinteni a részleteket!</a></p>
    <article>
        <p>
            {{ $order->order }}
        </p>
    </article>
</div>

</body>
</html>
