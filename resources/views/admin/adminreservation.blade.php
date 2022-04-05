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

        <div>
            <table>
                <tr>
                    <th style="padding: 20px">Name</th>
                    <th style="padding: 20px">Email</th>
                    <th style="padding: 20px">Phone Number</th>
                    <th style="padding: 20px">Guest Number</th>
                    <th style="padding: 20px">Date</th>
                    <th style="padding: 20px">Time</th>
                    <th style="padding: 20px">Message</th>
                </tr>
                @foreach ($data as $data )
                <tr>
                    <td style="padding: 20px">{{ $data->name }}</td>
                    <td style="padding: 20px">{{ $data->email }}</td>
                    <td style="padding: 20px">{{ $data->phone }}</td>
                    <td style="padding: 20px">{{ $data->guest }}</td>
                    <td style="padding: 20px">{{ $data->date }}</td>
                    <td style="padding: 20px">{{ $data->time }}</td>
                    <td style="padding: 20px">{{ $data->message }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    @include('admin.adminscript')

</body>

</html>
    