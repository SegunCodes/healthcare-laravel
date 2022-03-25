
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
      <div class="container-fluid page-body-wrapper">
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
                <h1 class="text-center">Add Doctor</h1><br>
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="doctor name">Doctor Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required style="color: rgb(14, 13, 13);" name="name" placeholder="Input Doctor Name">
                    </div><br>
                    <label for="doctor number">Doctor Phone Number</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="number" placeholder="Input phone number">
                    </div><br>
                    <label for="speciality">Speciality</label>
                    <div class="input-group">
                        <select name="speciality" required class="form-control" style="color: rgb(236, 227, 227);">
                            <option value="">--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div><br>
                    <label for="doctor room no">Doctor Room Number</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="room" placeholder="Input Doctor Room No">
                    </div><br>
                    <label for="doctor name">Doctor Image</label>
                    <div class="input-group">
                        <input type="file" required class="form-control" name="file">
                    </div>
                    <div class="input-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script');
  </body>
</html>