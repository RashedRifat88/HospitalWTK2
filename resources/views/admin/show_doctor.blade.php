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
    <!-- <div class="container-fluid page-body-wrapper" style="background-color: #d1dbeb;">

            <div align="center" style="padding:80px;">

                <table style="border-radius: 4px;">  

                    <tr style="background-color: #000000;" align="center">
                        <th style="padding:10px; font-size:20px; color: white;">Doctor Name</th>
                        <th style="padding:10px; font-size:20px; color: white;">Phone</th>
                        <th style="padding:10px; font-size:20px; color: white;">Speciality</th>
                        <th style="padding:10px; font-size:20px; color: white;">Room No</th>
                        <th style="padding:10px; font-size:20px; color: white;">Image</th>
                        <th style="padding:10px; font-size:20px; color: white;">Delete</th>
                        <th style="padding:10px; font-size:20px; color: white;">Update</th>
                    </tr>

                    @foreach ($data as $doctor)

                    <tr style="background-color: #e3e1e3;" align="center">

                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->name }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->phone }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->speciality }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->room }}</td>
                        <td style="padding:10px; font-size:15px; color: black;"><img height="100 px" width="100 px" src="doctor_image/{{ $doctor->image }}"> </td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_doctor', $doctor->id)}}">Delete</a></td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-primary"  href="{{url('update_doctor', $doctor->id)}}">Update</a></td>

                    </tr>

                    @endforeach



                </table>

            </div>

        </div> -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Doctor Tables </h3>
        </div>
        <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
               
                <div class="table-responsive">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th style="color:white;">Doctor Name</th>
                        <th style="color:white;">Phone</th>
                        <th style="color:white;">Speciality</th>
                        <th style="color:white;">Room No</th>
                        <th style="color:white;">Image</th>
                        <th style="color:white;">Delete</th>
                        <th style="color:white;">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $doctor)

                      <tr >

                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img height="100 px" width="100 px" src="doctor_image/{{ $doctor->image }}"> </td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_doctor', $doctor->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('update_doctor', $doctor->id)}}">Update</a></td>

                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © mymensinghhelpline.com 2022</span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span> -->
        </div>
      </footer>
      <!-- partial -->
    </div>

    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.script')

</body>

</html>