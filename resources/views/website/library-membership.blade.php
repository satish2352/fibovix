@extends('website.layouts.app')
@section('title')
    Individual MemberShip
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
        <div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-10">
          <h1 class=" text-uppercase text-primary">LIBRARY</h1>
         </div>
        </div>
          <div class="container my-5" style="max-width: 1300px">

        <div class="row text-center justify-content-center  my-4">
            <div class="col-md-6">
                <h1 class="display-7 font-weight-bold  my-3">INDIVIDUAL MEMBERSHIP</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Category A</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹25,000 <small class="text-muted">/ yr</small>
                                </h1>
                                <p> 
                                    •	Drones Under Nano Category<br>
                                    •	Free  Upload of Pilot Profile<br>
                                    •	Email and Telephone support<br>
                                    •	Help center  and Repair access<br>
                                    •	Discount on Online Purchase at rpapilot.com
                                </p>
                                <button type="button"
                                        class="btn btn-lg btn-block btn-primary text-uppercase font-weight-bold">buy now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Category B</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹2,00,000 <small class="text-muted">/
                                        yr</small>
                                </h1>
                                <p> 
                                    •	Drones Under Micro  Category<br>
                                    •	Free  Upload of Pilot Profile<br>
                                    •	Email and Telephone support<br>
                                    •	Help center  and Repair access<br>
                                    •	Discount on Online Purchase at rpapilot.com
                                </p>
                                <button type="button"
                                        class="btn btn-lg btn-block btn-primary text-uppercase font-weight-bold">buy now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="display-7 font-weight-bold my-3">COMPANY MEMBERSHIP</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Category A</h4>
                            </div>
                            
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹35,000 <small class="text-muted">/ yr</small>
                                </h1>
                                <p> 
                                    •	Drones Under Nano Category<br>
                                    •	Free  Upload of Pilot Profile<br>
                                    •	Email and Telephone support<br>
                                    •	Help center  and Repair access<br>
                                    •	Discount on Online Purchase at rpapilot.com
                                </p>
                                <button type="button"
                                        class="btn btn-lg btn-block btn-primary text-uppercase font-weight-bold">buy now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Category B</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹250,000 <small class="text-muted">/
                                        yr</small>
                                </h1>
                                <p> 
                                    •	Drones Under Micro  Category<br>
                                    •	Free  Upload of Pilot Profile<br>
                                    •	Email and Telephone support<br>
                                    •	Help center  and Repair access<br>
                                    •	Discount on Online Purchase at rpapilot.com
                                </p>
                                <button type="button"
                                        class="btn btn-lg btn-block btn-primary text-uppercase font-weight-bold">buy now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       <div class="container my-5" style="max-width: 1300px">
   <div class="card box-shadow-1 mb-2">
    <div class="card-body"> 
     <h1 class="display-7 mb-4">To use the Facility of the Library It is Compulsory for Individual to
                    be a member of the Library,&nbsp;Any Company or an Individual can be the member of the
                    Library.</h1>
     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Detils</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">More Detils ......</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><div class="card-body">
               

                <div class="row">
                    <div class="col-md-6">
                        <p><strong>The charges for Membership are</strong></p>
                        <ul>
                            <li>One Year Membership: Individual membership for Category A: 25000/-</li>
                            <li>One Year Membership: Individual membership for Category B: <strong>Not Open YET</strong>
                            </li>
                            <li>One Year Membership: Company membership for Category A: 35000/-</li>
                            <li>One Year Membership: Company membership for Category B:<strong>Not Open YET</strong>
                            </li>
                        </ul>
                        <blockquote>
                            <p><span class="text-primary"><em><strong>* All Membership charges are NON REFUNDABLE, rentals for Drone are extra as mentioned</strong></em></span>
                            </p>
                        </blockquote>
                        <p><strong>The Category is mentioned below with their products</strong></p>
                        <p><strong>Category A Includes mentioned Drones:</strong></p>
                        <ul>
                            <li>Phantom 3 Pro</li>
                            <li>Phantom 4</li>
                            <li>Phantom 4 Pro</li>
                        </ul>

                        <p><strong>Category B Includes mentioned Drones: (</strong><strong>Not Open YET)</strong></p>
                        <ul>
                            <li>Inspire 1 with 2 batteries and 2 set of 2 batteries Extra</li>
                            <li>Inspire 2 with 2 batteries and 2 set of 2 batteries Extra</li>
                            <li>Accessories with Drone Charged Separately under Category B and Provided Only with the
                                Drones
                                in Category B.
                            </li>
                        </ul>
                        <p><strong>The same will not be given for rent separately.</strong></p>
                        <ul>
                            <li>ZENMUSE X5</li>
                            <li>ZENMUSE X5S</li>
                            <li>ZENMUSE X7</li>
                        </ul>
                        <p><strong>Rent will be charged separately for the Above Camera series as
                                per charges mentioned below</strong></p>
                        <p><strong>The Charges are:</strong></p>
                        <ul>
                            <li>ZENMUSE X5 Rs 5000/- per issue Per days</li>
                            <li>ZENMUSE X5S Rs 6500/- per issue Per day</li>
                            <li>ZENMUSE X7 Rs 10000/-per issue per day</li>
                        </ul>
                        <p><strong>The rental Charges currently are as below and may be revised
                                without any prior notice</strong></p>
                        <p><strong>Category A:</strong></p>
                        <ul>
                            <li>For Drone rentals 1 to 18 = 2500/- per issue per day</li>
                            <li>For Drone rentals 19 to 30 = 2200/- per issue per day</li>
                            <li>For Drone rentals 31 and above = 2000/- per issue per day</li>
                        </ul>
                        <p><strong>Category B:&nbsp;</strong><strong>(Not Open YET)</strong></p>
                        <p>For Drone rentals 1 to 12 = 18000/- per issue per day not more than 240
                            minutes of Flight Time<br>For Drone rentals 13 and above = 15000/- per issue per day not
                            more
                            than 240 minutes of Flight Time</p>
                        <p>The rentals will be added in case the Drone is not returned till the
                            date of return.</p>
                        <p>All rentals to be paid in advance before the pickup<br>The Company can
                            Discontinue or add or change the categories of any drones included in its Library without
                            any
                            prior notice to any of the members about the changes in the category.</p>
                        <div class="gap-element" style="display:block; height:auto; padding-top:30px"></div>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Breakage, Damage, Confiscation, Theft, loss.</strong></p>
                        <p>Member is Liable for the Drone that he has taken on rent from the time
                            of Pick up to Drop (Called as Possession of Drones) at the Fliege Drop point mentioned
                            during
                            the Pickup.</p>
                        <p>The member is liable for any Breakage of the Drone during transits or
                            the flight or at any other time during which the Drone is in his possession.<br>The charge
                            for
                            repair has to be borne by the Member including the applicable charges of Labor and to be
                            made
                            immediately at the time of surrendering the drone or post the Expiry period of the issue.
                        </p>
                        <p>In case the Drone is confiscated by any person or Authority while under
                            his possession the member is liable to pay the Fine, face the legal action, pay the charges
                            for
                            the Drone as mentioned in his Indemnity bond signed during the issuing of the rental.</p>
                        <p>In case of theft or loss of the Drone during the Flight or the time of
                            possession of Drone is with the member he shall be liable for the complete value of the
                            Drone at
                            the current value price of the new drone.</p>
                        <p><strong>Member has to submit the Following list of Documents</strong>
                        </p>
                        <ul>
                            <li>Aadhar Card – Individual</li>
                            <li>PAN CARD – Individual and Company</li>
                            <li>GST Certificate – Company</li>
                            <li>Company Registration Certificate</li>
                            <li>Passport Copy – Individual</li>
                        </ul>
                        <p><strong>Contents of the Lot (unless mentioned otherwise)</strong></p>
                        <p>Each Drone&nbsp; will be accompanied by&nbsp; One charge, One battery,
                            One Extra Battery, Drone Casing, and the Bag, One set of Extra Propeller, Cable for
                            Connecting
                            the Mobile(Display)</p>
                        <p><strong>Extra Accessories Charges (ONLY WITH DRONE RENTALS)</strong>
                        </p>
                        <ol>
                            <li>A battery will be charged for Rs. 300/- per battery for Category A and Rs 1550/- per set
                                of
                                Two Battery in Category B. The mentioned charges can be changed without any prior
                                information.
                            </li>
                            <li>Any other Accessories required for Rent from the Library will have to be informed to the
                                In
                                charge person who shall inform the rent
                            </li>
                        </ol>
                        <p><strong>Payments</strong></p>
                        <ol>
                            <li>All Payments have to be made in advance and ONLY in Cheque, Bank Transfers, Credit Card
                                payments made Online.
                            </li>
                            <li>NO CASH Payment shall be accepted</li>
                            <li>Member are requested to get a proper receipt of the payments made by them from the
                                Person in
                                charge or the person to whom they are making the payment
                            </li>
                            <li>Every payment is also confirmed by an SMS from the Fliege UAV Concepts Pvt Ltd and an E
                                receipt sent by mail
                            </li>
                        </ol>
                        <p><strong>Membership &amp; Definition</strong></p>
                        <p>The membership is for a period of One Year from the Date of Receipt or
                            the Date of Payment of Receipt whichever is earlier</p>
                        <p><strong>Booking a Drone and Services</strong></p>
                        <ol>
                            <li>The Booking of Drone has to be done at least 5 days in advance in each Class</li>
                            <li>Any booking received for a Drone Rental to be supplied within 5 days shall be as per the
                                availability and Fliege Cannot guarantee the Drone rental in such cases
                            </li>
                            <li>The Rental is as per availability of Drones and a Ratio of 1 drone per 5 Members in
                                Category
                                A and Category B is maintained by FLIEGE
                            </li>
                            <li>Category B Drones shall include the Cost of the Pilot but the Lodging and Boarding of
                                the
                                Pilot is not included in the cost and If applicable has to be borne by the Member
                            </li>
                            <li>Each member will not be issued more than One Drone at any given point of time that is
                                the
                                policy of the Company is one member one drone rental
                            </li>
                        </ol>
                    </div>
                    <!-- <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Continue...</a> -->
                </div>
                <a  href="#pills-profile-tab">Read More ...........</a>
                
                <div class="alert alert-warning my-3 rounded" role="alert">
                    <p>ALL RULES AND REGULATIONS ARE SUBJECT TO CHANGE WITHOUT PRIOR NOTICE and will be posted on the web site which every member agrees to.</p>
                </div>
            </div></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="card-body">
                <!--<h1 class="display-7 mb-4">To use the Facility of the Library It is Compulsory for Individual to-->
                <!--    be a member of the Library,&nbsp;Any Company or an Individual can be the member of the-->
                <!--    Library.</h1>-->

                <div class="row">
                    <div class="col-md-12">
                        <p><span><strong>Permission</strong></span></p>
                        <ol>
                            <li><span>The permission required for flying the Drone shall be in </span>scope<span> of the member</span>
                            </li>
                            <li><span>It will be assumed and Indemnified by you that Fliege is not responsible for obtaining, applying, informing the required authority for any of the permissions required</span>
                            </li>
                            <li><span>The copy of the permission is to be submitted to the Fliege office before the issuing of drones</span>
                            </li>
                        </ol>
                        <p><span><strong>Cancellation of Membership</strong></span></p>
                        <ol>
                            <li><span>The </span>member ship<span> can be </span>cancelled<span> by Fliege if it is brought to notice that you are flying the drone in </span>restricted<span> area, without permission, invading </span>privacy<span> of people. Doing illegal activates etc.</span>
                            </li>
                            <li><span>The Fliege Company shall cancel all the membership if there is any change in policy by the government in regards to the rental or flying of drones</span>
                            </li>
                            <li><span>In case of cancellation of the membership under clause (a.) Of point (15) Fliege shall not refund any amount to the member.&nbsp; Under Point (b) the amount shall be refunded as per </span>Pro
                                rata<span> Basis of Month of membership availed</span></li>
                        </ol>
                        <p><span><strong>Extension of Membership</strong></span></p>
                        <p><span>The membership can </span>extended<span> at the end of membership period as per the terms and condition prevailing during the time</span>
                        </p>
                        <p>
                            <span><strong>Addition of Products, Category and up gradation of Category in LIBRARY</strong></span>
                        </p>
                        <ol>
                            <li><span>Fliege reserves the right to add the products in the library.</span></li>
                            <li><span>All products that are added in the Library will be available for the member for rent as per the Category he is registered for.</span>
                            </li>
                            <li><span>Fliege Can Open New category and members can upgrade the membership to the New Category by paying the Amount required for up gradation.</span>
                            </li>
                            <li>
                                <span>The up gradation of category shall not change the Expiry of the membership period.</span>
                            </li>
                            <li><span>Category A is Lowest and will increase in Alphabetical Order and member in </span>higher<span> category can take on rental the drones or products accessories etc. in </span>lower<span> category on rental as per the terms of hire in the category.</span>
                            </li>
                        </ol>
                        <p><span><strong>Pick up Points &amp; Drop Points</strong></span></p>
                        <ol>
                            <li>
                                <span>The Pickup Points will be the store location of Fliege and can be found on the </span>web
                                site
                            </li>
                            <li>
                                <span>The drop Points for the Drones will be the same as Pick Up points for the drones</span>
                            </li>
                            <li><span>In case of Drop Points being different from the Pickup Point the same has to be informed while </span>pick<span> up of Drones.</span>
                            </li>
                        </ol>
                        <p><span>Fliege Reserves the right of Admission to </span>library<span> and may reject membership to any Individual or Company if it may think so without any reason whatsoever</span>
                        </p>
                        <p><span>Drone Library does not give delivery of Drone to location facility and has to be picked up from </span>pre
                            allotted<span> location</span></p>
                        <p><span>All members will be asked to provide Police Clearance certificate and other required permissions and clearance from authority, Insurance for Drone etc at any point of Membership or before accepting the Library membership of an Individual or Company. And failing of which may arise to </span>cancellation<span> of membership</span>
                        </p>
                        <p><span>All members will have to abide </span>for<span> any rules regarding Drone, UAV, UAS existing, changed, altered, implemented by Government of India from time to time (Currently we plan to give the service only in INDIA if law permits)</span>
                        </p>
                        <p><span>Each Member (Individual and representatives of the Company in case of Company membership) has to undergo a Flying Test of Drone as per the Guidelines set by the concerned authority and only on clearance of the same shall be given the membership</span>
                        </p>
                        <p><span>Corporate or Company Membership also allows only One Person to represent the Company and the same person should have cleared all the necessary requirements to fly RPAs by Government Authorities and statutory Bodies&nbsp;</span>
                        </p>
                        <p><span><strong>Cancellation Charges</strong></span></p>
                        <ol>
                            <li><span>If any member has booked a drone and due to any unforeseen reason he cancels the order for rental. The following charges will be levied on the member. </span>this
                                charges<span> have to be cleared/ paid&nbsp; by the member&nbsp; before the next rental of the drone (whenever he wants to take a drone on rent after this cancellation)</span>
                            </li>
                            <li><span>5 days before the date of pickup&nbsp; = zero</span></li>
                            <li><span>3-4 days before the date of pickup = 25% of the rental</span></li>
                            <li><span>2- Days before the date of the pickup = 50% of the rental</span></li>
                            <li>day<span> before the date of pick up = 100% of the rental</span></li>
                        </ol>
                    </div>
                </div>
                <div class="alert alert-warning my-3 rounded" role="alert">
                    <p>ALL RULES AND REGULATIONS ARE SUBJECT TO CHANGE WITHOUT PRIOR NOTICE and will be posted on the web site which every member agrees to.</p>
                </div>
            </div></div>
</div>
</div>
</div>
</div>

        <div class="card box-shadow-1 mb-2">
            
        </div>
    </div>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
