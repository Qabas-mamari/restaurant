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
                <label for="">Chef Name</label>
                <input type="text" name="name" id="" placeholder="Enter the name" required style="color: black">
            </div>
            <div style="padding: 10px">
                <label for="">Speciality</label>
                <input type="text" name="speciality" id="" placeholder="Enter the speciality" required style="color: black">
            </div>
            <div style="padding: 10px">
                <label for="">Photo</label>
                <input type="file" name="image" id="" required>
            </div>
            <div style="padding: 10px">
                <input type="submit" value="save">
            </div>
        </form>
    </div>
    
    @include('admin.adminscript')

</body>

</html>
