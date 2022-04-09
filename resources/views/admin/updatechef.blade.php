<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">
        @include('admin.navbar')

        <form action="{{ url('/updatefoodchef', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 10px">
                <label for="">Chef Name</label><br>
                <input type="text" name="name" id="" required style="color: black" value="{{ $data->name }}">
            </div>
            <div style="padding: 10px">
                <label for="">Speciality</label><br>
                <input type="text" name="speciality" id="" required style="color: black" value="{{ $data->speciality }}">
            </div>
            <div style="padding: 10px">
                <label for="">Old Photo</label>
                <img src="foodchef/{{ $data->image }}" alt="" width="100" height="100">
            </div>
            <div style="padding: 10px">
                <label for="">New Photo</label><br>
                <input type="file" name="image" id="">
            </div>
            <div style="padding: 10px">
                <button type="submit" class="btn btn-warning" >update chef</button>
                {{-- <input type="submit" value="update chef"> --}}
            </div>
        </form>
    </div>
    
    @include('admin.adminscript')

</body>

</html>
