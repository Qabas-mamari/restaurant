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
            <table border="30px" bgcolor="grey">
                <tr>
                    <th style="padding: 20px">Name</th>
                    <th style="padding: 20px">Email</th>
                    <th style="padding: 20px">Action</th>
                </tr>

                @foreach ($data as $data )
                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>

                    @if ($data->usertype=='0')
                        <td><a href="{{ url('deleteUsers', $data->id) }}">Delete</a></td>
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