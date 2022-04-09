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
                    <label for="">Title</label><br>
                    <input type="text" name="title" id="" placeholder="Write a title" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <label for="">Price</label><br>
                    <input type="number" name="price" id="" placeholder="Price in OR" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <label for="">Image</label><br>
                    <input type="file" name="image" id="" required>
                </div>

                <div style="padding: 10px"><br>
                    <label for="">Description</label><br>
                    <input type="text" name="description" id="" placeholder="Write a description" required style="color:black">
                </div>

                <div style="padding: 10px">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

            <div>
                <table  class="table" style="color: white" style="padding:50%"> 
                    <tr>
                        <th style="padding: 30px">Food name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                    </tr>

                    @foreach ($data as $data )
                    <tr align="center">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img src="/foodimage/{{ $data->image }}" alt="" width="100px"></td>
                        <td><a href="{{ url('/deletemenu', $data->id) }}"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>


    @include('admin.adminscript')

</body>

</html>
