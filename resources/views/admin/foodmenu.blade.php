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
        
        <div style="position: relative; top:60px; right:-150px; ">
            <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding: 10px">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" placeholder="Write a title" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <label for="">Price</label>
                    <input type="number" name="price" id="" placeholder="Price in OR" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <label for="">Image</label>
                    <input type="file" name="image" id="" required>
                </div>

                <div style="padding: 10px">
                    <label for="">Description</label>
                    <input type="text" name="description" id="" placeholder="Write a description" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>

    </div>

    @include('admin.adminscript')

</body>

</html>
