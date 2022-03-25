
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
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Cancel</th>
                        <th>Send Mail</th>
                    </tr>
                    @foreach ($data as $appoint)
                    <tr>
                        <td>{{ $appoint->name }}</td>
                        <td>{{ $appoint->email }}</td>
                        <td>{{ $appoint->phone }}</td>
                        <td>{{ $appoint->doctor }}</td>
                        <td>{{ $appoint->date }}</td>
                        <td>{{ $appoint->message }}</td>
                        <td>{{ $appoint->status }}</td>
                        <td><a class="btn btn-success" href="{{ url('approved', $appoint->id) }}">Approve</a></td>
                        <td><a class="btn btn-danger" href="{{ url('cancel', $appoint->id) }}">Cancel</a></td>
                        <td><a class="btn btn-primary" href="{{ url('emailview', $appoint->id) }}">Send Mail</a></td>
                    </tr>  
                    @endforeach
                    
                </table>
            </div>
        </div>
       
    <!-- container-scroller -->
    @include('admin.script');
  </body>
</html>