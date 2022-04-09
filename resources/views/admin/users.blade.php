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

        <div style="position: relative; top: 60px; right: -60px ">
            <table border="30px" bgcolor="grey" class="table" style="color: white">
                <tr>
                    <th style="padding: 20px" scope="col">Name</th>
                    <th style="padding: 20px" scope="col">Email</th>
                    <th style="padding: 20px" scope="col">Action</th>
                </tr>

                @foreach ($data as $data)
                    <tr align="center">
                        <td >{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>

                        @if ($data->usertype == '0')
                            <td><a href="{{ url('deleteUsers', $data->id) }}"><button class="btn btn-danger">Delete</button></a></td>
                        @else
                            <td>Not Allowed</td>
                        @endif

                    </tr>
                @endforeach

            </table>
        </div>
    </div>


    @include('admin.adminscript')

</body>

</html>
