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

        <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 10px">
                <label for="">Chef Name</label><br>
                <input type="text" name="name" id="" placeholder="Enter the name" required style="color: black">
            </div>
            <div style="padding: 10px">
                <label for="">Speciality</label><br>
                <input type="text" name="speciality" id="" placeholder="Enter the speciality" required style="color: black">
            </div>
            <div style="padding: 10px">
                <label for="">Photo</label><br>
                <input type="file" name="image" id="" required>
            </div>
            <div style="padding: 10px">
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>
        </form>

        <table class="table" style="color:aliceblue">
            <tr>
                <th >Chef Name</th>
                <th >Speciality</th>
                <th >Image</th>
                <th >Action #1</th>
                {{-- <th >Action #2</th> --}}
            </tr>
            @foreach ($data as $data)
            <tr>
                <th>{{ $data->name }}</th>
                <th>{{ $data->speciality }}</th>
                <th ><img src="foodchef/{{ $data->image }}" alt="" width="400%" height="400"></th>
                <th>
                    <a href="{{ url('/updatechef', $data->id) }}"><button class="btn btn-warning">Update</button></a>
                    <a href="{{ url('/deletechef', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
                </th>
            </tr>
            @endforeach

        </table>
    </div>
    
    @include('admin.adminscript')

</body>

</html>
