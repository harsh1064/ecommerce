<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        @include('home.css')
        <style>
            .div_center
            {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 60px;
            }
            table
            {
                border: 2px solid black;
                text-align: center;
                width: 800px;
            }
            th{
                border: 2px solid skyblue;
                background-color: black;
                color: white;
                font-size: 19px;
                font-weight: bold;
                text-align: center;
            }
            td
            {
                border: 1px solid skyblue;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <div  class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img height="100" width="100" src="products/{{$order->product->image}}">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


    </div>
         <!-- info section -->
    @include('home.footer')
    <!-- end info section -->

    </body>
</html>