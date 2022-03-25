
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
                <form action="{{ url('sendemail', $data->id) }}" method="POST">
                    @csrf
                    <label>Greeting</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required style="color: rgb(14, 13, 13);" name="greeting">
                    </div><br>
                    <label>Body</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required style="color: rgb(14, 13, 13);" name="body">
                    </div><br>
                    <label>Action Text</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="action">
                    </div><br>
                    <label>Action URL</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="url">
                    </div><br>
                    <label>End Part</label>
                    <div class="input-group">
                        <input type="text" required class="form-control" style="color: rgb(14, 13, 13);" name="end">
                    </div><br>
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