
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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

            <div class="container" style="padding-top: 100px;">
                
                @if (session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session()->get('message') }}
                </div>
                
                    
                @endif
                <h1 class="text-center">Update Doctor</h1><br>
                <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="doctor name">Doctor Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required style="color: rgb(14, 13, 13);" name="name" value="{{ $data->name }}">
                    </div><br>
                    <label for="doctor number">Doctor Phone Number</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="number" value="{{ $data->phone }}">
                    </div><br>
                    <label for="speciality">Doctor Speciality</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="speciality" value="{{ $data->speciality }}">
                    </div><br>
                    <label for="doctor room no">Doctor Room Number</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="room" value="{{ $data->room }}">
                    </div><br>
                    <label for="">Old Image</label>
                    <div class="input-group">
                        <img height="150" width="150" src="doctorimage/{{ $data->image }}" alt="">
                    </div><br>
                    <label for="change Image">Change Image</label>
                    <div class="input-group">
                        <input type="file" class="form-control" style="color: rgb(14, 13, 13);" name="file" value="{{ $data->room }}">
                    </div><br>
                    <div class="input-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
       
    <!-- container-scroller -->
    @include('admin.script');
  </body>
</html>