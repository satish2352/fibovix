<div class="form-row justify-content-between">
<div class="form-group col-md-6">
    <label for="createInputState">City <span class="text-primary">*</span></label>
        <select name="city" id="cityFinalNew" class="form-control " title="Choose..." data-live-search="true" required>
        <option value="" >Choose City</option>
        @foreach($cityList as $key=>$city)
        <option value="{{$city['id']}}" >{{$city['name']}}</option>
        @endforeach                            
        </select>
</div>
</div>



<!--<div class="form-group col-md-6" id="city" >-->
<!--                                    <label for="">Password Confirmation<span class="text-primary">*</span></label>-->
<!--                                    <select name="city" class="selectpicker form-control " title="Choose..." data-live-search="true" required>-->
<!--                                    <option value="" >Choose City</option>-->
<!--                                    @foreach($cityList as $key=>$city)-->
<!--                                    <option value="{{$city['id']}}" >{{$city['name']}}</option>-->
<!--                                    @endforeach                            -->
<!--                                    </select>-->
<!--                                </div>-->


