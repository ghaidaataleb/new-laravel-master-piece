@include('include.top')
  <body>

   <!-- start nav -->
   @include("include.nav")

   <!-- END nav -->



   <div align="center" style="padding: 70px;">

       <table>


          <tr style="background-color: black;">
            <th style="padding:10px; font-size: 20px; color:white;">Name</th>
            <th style="padding:10px; font-size: 20px; color:white;">Date</th>
            <th style="padding:10px; font-size: 20px; color:white;">Time</th>
            <th style="padding:10px; font-size: 20px; color:white;">message</th>
            <th style="padding:10px; font-size: 20px; color:white;">Status</th>
            <th style="padding:10px; font-size: 20px; color:white;">Services</th>
            <th style="padding:10px; font-size: 20px; color:white;">Cancel Appointment</th>


          </tr>


          @foreach ($appoint as $appoints)
              

          <tr style="background-color:black;" align="center">
            <td style="padding:10px;  color:white;">{{$appoints->name}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->date}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->time}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->message}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->status}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->speciality}}</td>
            <td><a class="bt btn-danger" onclick="return confirm('are you sure to delete this?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>

          </tr>

          @endforeach


       </table>

   </div>
  

  <!-- loader -->
@include('include.bottom')