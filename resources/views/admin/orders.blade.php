<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <h1>Customers Orders</h1>

        <table>
            <tr align="center">
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Address</th>
                <th style="padding: 30px">Foodname</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Quantity</th>
                <th style="padding: 30px">Total Price</th>    
            </tr>
            @foreach ( $data as $data )
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    @include('admin.adminscript')

</body>

</html>
