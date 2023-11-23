

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
 
      @include('admin.sidebar')


      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
     

        <div class="container-fluid page-body-wrapper">

           <div align="center" style="padding:100px;">
            

              <table>

                  <tr style="background-color:black;">
                    <th style="padding: 10px">speciality</th>
                    <th style="padding: 10px">name</th>
                    {{-- <th style="padding: 10px">vehicle_num</th> --}}
                    <th style="padding: 10px">date</th>
                    <th style="padding: 10px">time</th>
                    <th style="padding: 10px">message</th>
                    <th style="padding: 10px">status</th>
                    <th style="padding: 10px">approved</th>
                    <th style="padding: 10px">canceled</th>
                    <th style="padding: 10px">send email</th>



                  </tr>
                    
                  @foreach ($data as $appoint)
                      
                  <tr align="center" style="background-color: skyblue;">

                    <td>{{$appoint->speciality}}</td>
                    <td>{{$appoint->name}}</td>
                    {{-- <td>{{$appoint->vehicle_num}}</td> --}}
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->time}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                    <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                    <td><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Email</a></td>

                  </tr>

                  @endforeach


              </table>


           </div> 



        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')


    <!-- End custom js for this page -->
  </body>
</html>