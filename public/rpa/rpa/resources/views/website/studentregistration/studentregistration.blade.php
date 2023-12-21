
@extends('website.layouts.app')
@section('title')
    STUDENT REGISTRATION
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
<style>
    .modalNew {
    width: 806px;
}
</style>

 <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">STUDENT REGISTRATION</h1>

            </div>
            @if(session('success'))
             <span class="alert alert-success" role="alert">
                 <strong>{{ session('success') }}</strong>
             </span>
            @endif
        </div>
<div class="row position-relative">
        <div class="container my-5" style="max-width: 800px">
            <div class="col-md-12">
                <div class="card shadow" style="margin-bottom: 150px;">
                    <div class="card-body">
                        <form action="{{route('savestudentregforms')}}" method="Post" class="mb-5" enctype="multipart/form-data">
                                                       
                            @csrf
                                <div class="form-row justify-content-between">
                                <div class="form-group col-md-4">
                                    <label for="">First Name <span class="text-primary">*</span></label>
                                    <input name="firstName" type="text" class="form-control" id="firstName"
                                           placeholder="Provide First Name" value=""  oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="">Middle Name <span class="text-primary">*</span></label>
                                    <input name="middleName" type="text" class="form-control" id="middleName"
                                           placeholder="Provide Middle Name" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');" value="" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Last Name <span class="text-primary">*</span></label>
                                    <input name="lastName" type="text" class="form-control" id="lastName"
                                           placeholder="Provide Last Name" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');" value="" required>
                                </div>
                            </div>
                           
                            
                            <input name="courseId" value="<?php echo $courseId; ?>" hidden>
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Email Address <span class="text-primary">*</span></label>
                                    <input name="email" type="email" class="form-control" id=""
                                           placeholder="Provide Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Mobile Number <span class="text-primary">*</span></label>
                                    <input name="mobile" type="text" class="form-control" id="" placeholder="Provide Mobile Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  pattern="^\d{10}$" required>
                                </div>
                                
                                
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Password <span class="text-primary">*</span></label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Provide Password" required>
                                </div>
                                
                                 <div class="form-group col-md-6">
                                    <label for="">Password Confirmation<span class="text-primary">*</span></label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confpassword"
                                           placeholder="Provide Password Confirmation" required>
                                </div>

                                
                               
                            </div>
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputState">State <span class="text-primary">*</span></label>
                                   <select name="stateId" id="stateId" class="selectpicker form-control " title="Choose..." data-live-search="true" onchange="getCity();" required>
                                        <option value="">Choose State</option>
                                        @foreach($stateList as $key=>$state)
                                        <option value="{{$state->id}}" >{{$state->name}}</option>
                                        @endforeach                                
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                <div id="city"></div>
                                    
                                </div>
                            </div>
                            
                            <div class="form-row justify-content-between">
                                 <div class="form-group col-md-6">
                                    <label for="createInputProfession">Profession <span
                                            class="text-primary">*</span></label>
                                            
                                    <select name="profession" id="profession" class="selectpicker form-control " title="Choose..." data-live-search="true" required>
                                        <option value="">Select Profession</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="BE" >BE</option>
                                        <option value="ME" >ME</option>
                                        
                                    </select>
                                </div> 
                                
                                
                                <div class="form-group col-md-6">
                                    <label for="">Aadhar ID </label>
                                    <input name="aadharNumber" type="text" class="form-control" id=""
                                           placeholder="Provide aadhar ID" pattern="^\d{12}$" >
                                </div>
                                
                            </div>

                             <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                   <label for="">10th Certificate <span class="text-primary">*</label><br>
                                   <input type="file" id="image" name="certificate"  accept=" .png, .jpg, .jpeg " required />
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                                   <label for="">Passport Photo <span class="text-primary">*</label><br>
                                   <input type="file" id="image1" name="passportPhoto"  accept=" .png, .jpg, .jpeg " required />
                                </div>
                                
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputState">Address Proof<span class="text-primary">*</span></label>
                                   <select name="addressProof" id="select" class="selectpicker form-control " title="Choose..." required>
                                        <option value="">Choose Address Proof</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Aadhar">Aadhar</option>
                                        <option value="Driving License">Driving License</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                   <label for="">Address Proof Front <span class="text-primary">*</label><br>
                                   <input type="file" id="image2" name="addressProofFront"  accept=" .png, .jpg, .jpeg " required />
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                                   <label for="">Address Proof Back <span class="text-primary">*</label><br>
                                   <input type="file" id="image3" name="addressProofBack"  accept=" .png, .jpg, .jpeg " required />
                                </div>
                                
                            </div>
                            <div class="form-row justify-content-between">
                            <div class="form-group col-md-6">
                                    <label for="">Address Proof ID Number <span class="text-primary">*</label>
                                    <input name="idNumber" type="text" class="form-control" id=""
                                           placeholder="Provide ID" required="">
                            </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-12">
                                <input type="checkbox" name="checkbox1" value="check" required="">&nbsp;I agree to accept all FTO's Terms and Conditions. 
                            </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-12">
                                <input type="checkbox" name="checkbox" value="check" id="agree" data-toggle="modal" data-target="#IndemnityBondModal" required="" onclick="getModalData();">&nbsp;I give my acceptance to Indemnity Bond. 
                            </div>
                            </div>


                             <div class="form-row justify-content-between">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary w-100" onclick="return Validate()">Submit</button>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="reset" class="btn btn-primary w-100">Reset</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>





<!-- Modal -->
<div class="modal fade" id="IndemnityBondModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalNew">
      <div class="modal-header">
       
        <center><h4 class="modal-title" id="myModalLabel">Indemnity Bond</h4></center>
      </div>
      <div class="modal-body">
        	
						<div class="form-group row">
							
							<div class="col-sm-12 col-md-12">
							    <p style="text-align: justify;">
							        I,<span id="nameOfStudent"></span> S/o <span id="middlenameOfStudent"></span> / D/o <span id="middlenameOfStudent"></span> R/o <span id="cityOfStudent"></span> <span id="stateOfStudent"></span> ,
<!--Date of Birth ____________________________ -->
have taken admission / am presently studying in <span id="professionOfStudent"></span> 
<!--of   ___________________________  -->
in the Academic Year(Current Year), bearing Enrolment No. (Admission Number) I hereby affirm that I have gone through the academic requirements of the program that I have enrolled for and I have fully understood that during the said program the Institute/University shall arrange activities beyond class rooms requiring travels within the country, such as, training areas, Airfields , practice grounds for flying RPAS, educational tours, field work, seminars, conferences, workshops, quiz/technical competition, cultural programs, sports, training programs (including adventure training), to present research papers and such other curricular, co-curricular activities and extra-curricular activities.
 I hereby declare that no criminal case is pending or contemplated against me in any Court of Law and I declare that if anything contrary is found, I shall be solely responsible for the consequences arising there from including cancellation of my admission/expulsion from ‘BFC’. 
I hereby irrevocably undertake that:
1.	That the training received through the instructors / professors or appointed representatives of <?php echo "<b>".$FTOName."</b>"; ?> will be used as per the Drone Policy Specified by Government of India and DGCA regulations.
2.	I ensure that the training  will be  not misused and it will always be in compliance of all the legal and civil laws of the Government of India and the respective State Government regulations.
3.	I confirm  that I have  read the Drone Policy specified by the Government of India and DGCA. And will continue to adhere to the regular updates on the policy and its regulation as amended by the authorities from time to time  on my own
4.	I am well aware of all the provisions and regulations to be followed for the category of RPAS I have been trained for.And  I  also confirm  that I shall and  will only fly the drone for the category  for which I have been trained for by the ‘BFC’ and that too only after the completion of the course and follow all the Laws as mentioned by DGCA in CAR Section 3 Series X Part I - Requirements for Operation of Civil Remotely Piloted Aircraft System (RPAS) and amended and published from time to time.
5.	The  hereby indemnifies <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliates  against any liabilities & responsibilities for the end use of the training. The trainee confirms that The Bombay Flying Club , its associates  and its affiliates is not responsible for the end use of the training in any way whatsoever.
6.	I have confirmed to <?php echo "<b>".$FTOName."</b>"; ?>., that the training by The Bombay Flying Club will be used in compliance with all laws of the Government of India and there will be no misuse of the training. 
7.	I confirm that <?php echo "<b>".$FTOName."</b>"; ?>or its employees,, its associates  and its affiliates will not be held liable in any way for any damage or liability arising due to the flying of RPAS  against certificate  Number 
<!--__________________________Dated_____________________.-->
8.	I have gone through the rules, regulations and guidelines with regard to academics, examination, hostel, discipline, training camp, Training  facilities (including Indoor  and outdoor), tours and all other activities, as notified by the <?php echo "<b>".$FTOName."</b>"; ?>. 
9.	I fully understand that all these notifications and such other guidelines and norms, as may be notified by‘BFC’ from time to time are to be followed by me in true spirit, during my entire tenure of the Course and when I am in the premises of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its Affiliate
10.	I also understand  and affirm that I shall and  will ensure that the training of flying RPAS is not misused and it will always be in compliance of all the legal and civil laws of the Government of India and the respective State Government regulations applicable for the end use of the product.
11.	 I shall not indulge in any unlawful activities and shall not violate the law of land and any directives of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its affiliatesthat may be issued from time to time. Further, if I am found to be involved in any unlawful activity/s, I shall be solely responsible for the consequences arising therefrom including cancellation of my admission/expulsion from ‘BFC’ and or cancellation , revocation , suspension of my certificate mentioned herein above 
12.	I shall not do anything which may cause any injury or damage to me or to any other person during the course or after the  course and shall kept indemnified the <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliates fromany such damage caused by me or to me.
13.	I shall observe strict discipline and follow the instructions of the Faculty/Supervisor and other authorities during my stay inside the campus, hostel or in activities beyond class rooms which the Institute/University shall arrange, where I shall participate, requiring travel/s within and outside the country, but not limited to such as,  training camps, industrial visits, educational tours, field work, seminars, conferences, workshops, quiz/technical competition, cultural programs, sports, training programs, to present research papers and such other curricular, co-curricular and extra-curricular activities. I have gone through ‘BFC’on ”Maintenance of Discipline among students” . Further, if I am found to be involved in any indiscipline activity/s, I shall be solely responsible for the consequences arising therefrom including cancellation of my admission/expulsion from ‘BFC’. 
14.	I shall not do anything wrong and or conduct myself in a manner which may bring disrepute to <?php echo "<b>".$FTOName."</b>"; ?>.
15.	I further affirm that I have taken the necessary Insurance Policy and I shall keep the <?php echo "<b>".$FTOName."</b>"; ?> and its Associates and affiliates indemnified and shall not hold BFC’ and/or Associates and/or affiliates their employees/officials harmless, from every type of mishaps, unfortunate incident/accident, loss or damage(s) which may arise out of any of such activities aforesaid stated in para and during the duration of the course which I have taken the admission for in the ‘BFC’
16.	I shall produce the originals of the Xerox  copy of the documents submitted to the <?php echo "<b>".$FTOName."</b>"; ?> when demanded by the <?php echo "<b>".$FTOName."</b>"; ?>  and I also confirm that I shall keep my personnel original documents and belongings  with full security and not hold <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliatesresponsible for their loss or damage or ask for any compensation whatsoever if I damage , or lose them within the premises of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its affiliates. Further, I undertake the responsibility of full compensation, if found guilty of any of my actions that may have caused damages to anyone and/or the <?php echo "<b>".$FTOName."</b>"; ?> and / or its Associates and /or Affiliates. 
17.	I have signed this Undertaking withconsent to my participation in all such activities / tour programs, stated herein above. This Undertaking shall remain valid during the entire tenure of the program in <?php echo "<b>".$FTOName."</b>"; ?> for which I have enrolled myself or till the last day of my pursuing the said program of study in ‘BFC’, whichever period is applicable.
I confirm that all that is stated above is true to best of my knowledge and I shall keep the INSTITUTE, , its associates  and its affiliates Indemnified from any claims, compensation , legal action or any other loss of any kind whatsoever caused  because of me  or my action or my belongings
</p>
Following self-certified documents to be attached: 
1. For Company: GST certificate of Company / CIN number of company on Company Letterhead / Pan Number 
2. For Individual: Copy of Aadhar card /Passport
3. Passing Certificate of Standard X , English medium 


        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
      </div>
      
							</div>
						</div>
						
 
      </div>
      
    </div>
  </div>
</div>








    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Indemnity Bond</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="form-group col-md-6" >
                                <label for="createInputState">FTO Name <span class="text-primary">*</span></label>
                                    

I,<span style="font-weight: bold;"  id="nameOfStudent"></span> S/o <span style="font-weight: bold;"  id="middlenameOfStudent"></span> / D/o <span style="font-weight: bold;"  id="middlenameOfStudent"></span> R/o <span style="font-weight: bold;"  id="stateOfStudent"></span> ,
<!--Date of Birth ____________________________ -->
have taken admission / am presently studying in <span style="font-weight: bold;"  id="professionOfStudent"></span> of   ___________________________  in the Academic Year(Current Year), bearing Enrolment No. (Admission Number) I hereby affirm that I have gone through the academic requirements of the program that I have enrolled for and I have fully understood that during the said program the Institute/University shall arrange activities beyond class rooms requiring travels within the country, such as, training areas, Airfields , practice grounds for flying RPAS, educational tours, field work, seminars, conferences, workshops, quiz/technical competition, cultural programs, sports, training programs (including adventure training), to present research papers and such other curricular, co-curricular activities and extra-curricular activities.
 I hereby declare that no criminal case is pending or contemplated against me in any Court of Law and I declare that if anything contrary is found, I shall be solely responsible for the consequences arising there from including cancellation of my admission/expulsion from ‘BFC’. 
I hereby irrevocably undertake that:
1.	That the training received through the instructors / professors or appointed representatives of <?php echo "<b>".$FTOName."</b>"; ?> will be used as per the Drone Policy Specified by Government of India and DGCA regulations.
2.	I ensure that the training  will be  not misused and it will always be in compliance of all the legal and civil laws of the Government of India and the respective State Government regulations.
3.	I confirm  that I have  read the Drone Policy specified by the Government of India and DGCA. And will continue to adhere to the regular updates on the policy and its regulation as amended by the authorities from time to time  on my own
4.	I am well aware of all the provisions and regulations to be followed for the category of RPAS I have been trained for.And  I  also confirm  that I shall and  will only fly the drone for the category  for which I have been trained for by the ‘BFC’ and that too only after the completion of the course and follow all the Laws as mentioned by DGCA in CAR Section 3 Series X Part I - Requirements for Operation of Civil Remotely Piloted Aircraft System (RPAS) and amended and published from time to time.
5.	The  hereby indemnifies <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliates  against any liabilities & responsibilities for the end use of the training. The trainee confirms that The Bombay Flying Club , its associates  and its affiliates is not responsible for the end use of the training in any way whatsoever.
6.	I have confirmed to <?php echo "<b>".$FTOName."</b>"; ?>., that the training by The Bombay Flying Club will be used in compliance with all laws of the Government of India and there will be no misuse of the training. 
7.	I confirm that <?php echo "<b>".$FTOName."</b>"; ?>or its employees,, its associates  and its affiliates will not be held liable in any way for any damage or liability arising due to the flying of RPAS  against certificate  Number __________________________Dated_____________________.
8.	I have gone through the rules, regulations and guidelines with regard to academics, examination, hostel, discipline, training camp, Training  facilities (including Indoor  and outdoor), tours and all other activities, as notified by the <?php echo "<b>".$FTOName."</b>"; ?>. 
9.	I fully understand that all these notifications and such other guidelines and norms, as may be notified by‘BFC’ from time to time are to be followed by me in true spirit, during my entire tenure of the Course and when I am in the premises of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its Affiliate
10.	I also understand  and affirm that I shall and  will ensure that the training of flying RPAS is not misused and it will always be in compliance of all the legal and civil laws of the Government of India and the respective State Government regulations applicable for the end use of the product.
11.	 I shall not indulge in any unlawful activities and shall not violate the law of land and any directives of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its affiliatesthat may be issued from time to time. Further, if I am found to be involved in any unlawful activity/s, I shall be solely responsible for the consequences arising therefrom including cancellation of my admission/expulsion from ‘BFC’ and or cancellation , revocation , suspension of my certificate mentioned herein above 
12.	I shall not do anything which may cause any injury or damage to me or to any other person during the course or after the  course and shall kept indemnified the <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliates fromany such damage caused by me or to me.
13.	I shall observe strict discipline and follow the instructions of the Faculty/Supervisor and other authorities during my stay inside the campus, hostel or in activities beyond class rooms which the Institute/University shall arrange, where I shall participate, requiring travel/s within and outside the country, but not limited to such as,  training camps, industrial visits, educational tours, field work, seminars, conferences, workshops, quiz/technical competition, cultural programs, sports, training programs, to present research papers and such other curricular, co-curricular and extra-curricular activities. I have gone through ‘BFC’on ”Maintenance of Discipline among students” . Further, if I am found to be involved in any indiscipline activity/s, I shall be solely responsible for the consequences arising therefrom including cancellation of my admission/expulsion from ‘BFC’. 
14.	I shall not do anything wrong and or conduct myself in a manner which may bring disrepute to <?php echo "<b>".$FTOName."</b>"; ?>.
15.	I further affirm that I have taken the necessary Insurance Policy and I shall keep the <?php echo "<b>".$FTOName."</b>"; ?> and its Associates and affiliates indemnified and shall not hold BFC’ and/or Associates and/or affiliates their employees/officials harmless, from every type of mishaps, unfortunate incident/accident, loss or damage(s) which may arise out of any of such activities aforesaid stated in para and during the duration of the course which I have taken the admission for in the ‘BFC’
16.	I shall produce the originals of the Xerox  copy of the documents submitted to the <?php echo "<b>".$FTOName."</b>"; ?> when demanded by the <?php echo "<b>".$FTOName."</b>"; ?>  and I also confirm that I shall keep my personnel original documents and belongings  with full security and not hold <?php echo "<b>".$FTOName."</b>"; ?> , its associates  and its affiliatesresponsible for their loss or damage or ask for any compensation whatsoever if I damage , or lose them within the premises of the <?php echo "<b>".$FTOName."</b>"; ?>, its associates  and its affiliates. Further, I undertake the responsibility of full compensation, if found guilty of any of my actions that may have caused damages to anyone and/or the <?php echo "<b>".$FTOName."</b>"; ?> and / or its Associates and /or Affiliates. 
17.	I have signed this Undertaking withconsent to my participation in all such activities / tour programs, stated herein above. This Undertaking shall remain valid during the entire tenure of the program in <?php echo $FTOName; ?> for which I have enrolled myself or till the last day of my pursuing the said program of study in ‘BFC’, whichever period is applicable.
I confirm that all that is stated above is true to best of my knowledge and I shall keep the INSTITUTE, , its associates  and its affiliates Indemnified from any claims, compensation , legal action or any other loss of any kind whatsoever caused  because of me  or my action or my belongings

Following self-certified documents to be attached: 
1. For Company: GST certificate of Company / CIN number of company on Company Letterhead / Pan Number 
2. For Individual: Copy of Aadhar card /Passport
3. Passing Certificate of Standard X , English medium 

                                        @foreach($allContent as $key=>$allContent)
                                        <p value="{{$allContent->id}}">
                                           {{$allContent->bondContent}} 
                                        </p>
                                        
                                        @endforeach
                                    
                                    
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</div>

<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confpassword = document.getElementById("confpassword").value;
            if (password != confpassword) 
            {
                alert("Password Not Matched, Please Confirm Password");
                return false;
            }
            
            return true;
        }
</script>
<script>
    function getModalData()
    {
        var fname=$("#firstName").val();
        var middleName=$("#middleName").val();
        var lastName=$("#lastName").val();
        var profession=$("#profession").val();
        var state=$("#stateId option:selected").text();
        var cityOfStudent=$("#cityFinalNew option:selected").text();
        //var profession=$("#profession").val();
        var nameOfStudent=fname+" "+middleName+" "+lastName;
        var middlenameOfStudent=middleName+" "+lastName;
        $("#nameOfStudent").html(nameOfStudent);
        $("#nameOfStudent").attr("font-weight: bold");
        $("#middlenameOfStudent").html(middlenameOfStudent);
        $("#professionOfStudent").html(profession);
        $("#stateOfStudent").html(state);
        $("#cityOfStudent").html(cityOfStudent);
        
        
    }
</script>


   <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>   
        <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image1").change(function(){
                    readImageData1(this);//Call image read and render function
                });
            });
             
            function readImageData1(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img1').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image2").change(function(){
                    readImageData2(this);//Call image read and render function
                });
            });
             
            function readImageData2(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img2').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>
         <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image3").change(function(){
                    readImageData3(this);//Call image read and render function
                });
            });
             
            function readImageData3(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img3').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>
        <script type="text/javascript">
            $('input[type="checkbox"]').on('change', function(e){
   if(e.target.checked){
     $('#myModal').modal();
   }
});
        </script>
        <script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>

<script>
    
    function getCity(){
            var url=APP_URL+'/getcity';
            let stateId = $('#stateId').val();
            //alert(stateId); 
            if(stateId==null || stateId=='')
            {
                alert("Select City");
                return false;
            }
            
            $.ajax({
                url:url,
                type: 'post',
                dataType: 'html',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'stateId': stateId
                },
                
                
                success: function (response) {
                    $('#city').empty();
                    $('#city').append(response);
                    $('#city').show();
                }
            });
    }
    
    
</script>



<!-- <script type="text/javascript">
    function ShowHideDiv() 
    {
        var category = document.getElementById("category").value;
        var categoryId=category.toString().split("*");
        var requiredDiv = document.getElementById("requiredDiv");
        requiredDiv.style.display = categoryId[1] == "1" ? "block" : "none";
    }
</script>  -->


   @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection