<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <center>
            <h3>Customer Name : {{$data->name}}</h3>
            <h3>Customer Address : {{$data->rec_address}}</h3>
            <h3>Phone : {{$data->phone}}</h3>
            <h2>Product Title : {{$data->product->title}}</h2>
            <h2>Price : {{$data->product->price}}</h2>
            <img width="300" height="250" src="products/{{$data->product->image}}">
        </center>
    </body>
</html>