@extends('website.layouts.app')
@section('title')
    Do or Don't
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
       
        <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">DO'S & DON’TS REGARDING OPERATION OF RPAS</h1>
            </div>
        </div>
         <div class="container my-5">
        <div class="card box-shadow-1 mb-2">
            <div class="card-body">
               <p>Unmanned Aircraft System (UAS)/ Remotely Piloted Aircraft System (RPAS), commonly known as drones/ UAV, is a new addition to the aviation sector. This technology has promising effect on economic growth of India; both manufacturing and service industry.</p>
                <p>As more people enter the commercial and recreational hobby drone scene; the prospects for drone accidents/ incidents also multiply. This applies not just to newcomers/ amateurs but even to professionals.
                Here are some operational safety tips to ensure that you have a better and safer flying experience, not just for yourself but the people around you.
                </p>
                
                <ul>
              <strong>Do’s</strong>
                <li>Ensure your Drone (except Nano in uncontrolled airspace upto 50ft) is Digital Sky “No Permission- No Take off” (NPNT) Compliant</li>
                <li>Obtain Unique Identification Number (UIN) from DGCA for operating in controlled airspace and affix it on your drone</li>
                <li>Obtain Unmanned Aircraft Operator Permit (UAOP), if applicable from DGCA for commercial operations and keep it handy</li>
                <li>Obtain Permission before each flight through Digital Sky Platform</li>
                <li>Ensure drone is in good condition (not damaged) and fit for flying safely.</li>
                <li>Keep an eye on interference: Interference can be from mobile devices or blockage of signals, do watch out when flying your drone.
                </li>
                <li>Fly only during daylight (after sunrise to before sunset)</li>
                <li>Fly in good weather: Good weather lets you not only fly your drone better but also keep track of it in the air.</li>
                <li>Fly in visual line of sight (VLOS): Always be within visual range of your drone.</li>
                <li>Follow Flying Guidelines</li>
                <li>Do your homework before spending the considerable money for a drone. Make sure you clearly understand all operational and regulatory aspects.</li>
                <li>Be aware of Airspace Restrictions/ No Drone Zones</li>
                <li>Do stay away from airports and heliports</li>
                <li>Respect privacy of people</li>
                <li>Keep local police informed about your drone flying activity. If you are ever approached by police provide all requisite information.</li>
                <li>Do log your flights and intimate concerned authorities (like DGCA, local police etc.) of any incidents/ accidents</li>
                <strong>Don’ts</strong>
                <li>Don’t fly a Nano drone above 50ft (15m) from the ground level</li>
                <li>Don’t fly a Micro drone above 200ft (60m) from the ground level</li>
                <li>Don’t fly drones more than 400ft (120m) from the ground level</li>
                <li>Don’t fly drone near other aircraft (manned or unmanned)</li>
                <li>Don’t fly drone near airports and heliports</li>
                <li>Don’t fly drone over groups of people, public events, or stadiums full of people without permission</li>
                <li>Don’t fly drone over government facilities/military bases or over/ near any no-drone zones.</li>
                <li>Don’t fly drone over private property unless permission is given.</li>
                <li>Don't fly drone in controlled airspace near airports without filing flight plan or AAI/ADC permission (at least 24 hours before actual operation).</li>
                <li>Don’t drop or carry hazardous material</li>
                <li>Don’t fly drone under the influence of drugs or alcohol</li>
                <li>Don’t fly drone from a moving vehicle, ship or aircraft</li>
            </ul>
                
            
           
            </div>
        </div>
      </div>
    
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
