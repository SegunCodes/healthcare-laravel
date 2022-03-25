
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div  class="table-responsive " style="padding-top: 20px;">
                <table class="table table-bordered table-hover table-light">
                    <tr>
                        <th>Doctor</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room Number</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img src="doctorimage/{{ $doctor->image }}" height="100" width="100" alt=""></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this doctor?')" class="btn btn-danger" href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{ url('updatedoctor', $doctor->id) }}">Update</a></td>
                    </tr>  
                    @endforeach
                    
                </table>
            </div>
        </div>
       
    <!-- container-scroller -->
    @include('admin.script');
  </body>
</html>