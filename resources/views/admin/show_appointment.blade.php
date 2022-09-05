<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="background-color: #d1dbeb;">

            <div align="center" style="padding:80px;">

                <!-- <table style="border-collapse:separate; border-radius: 4px;">   -->
                <table style="border-radius: 4px;">  

                    <tr style="background-color: #000000;" align="center">
                        <th style="padding:10px; font-size:20px; color: white;">Customar Name</th>
                        <th style="padding:10px; font-size:20px; color: white;">Email</th>
                        <th style="padding:10px; font-size:20px; color: white;">Phone</th>
                        <th style="padding:10px; font-size:20px; color: white;">Doctor</th>
                        <th style="padding:10px; font-size:20px; color: white;">Date</th>
                        <th style="padding:10px; font-size:20px; color: white;">Message</th>
                        <th style="padding:10px; font-size:20px; color: white;">Status</th>
                        <th style="padding:10px; font-size:20px; color: white;">Approve</th>
                        <th style="padding:10px; font-size:20px; color: white;">Cancel</th>
                    </tr>

                    @foreach ($data as $appointment)

                    <tr style="background-color: #cef542;" align="center">

                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->name }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->email }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->phone }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->doctor }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->date }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->message }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->status }}</td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-success" onclick="return confirm('Are you sure to approve this?')" href="{{url('approve_appointment', $appointment->id)}}">Approve</a></td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('cancel_appointment_a', $appointment->id)}}">Cancel</a></td>

                    </tr>

                    @endforeach



                </table>

            </div>

        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.script')

</body>

</html>