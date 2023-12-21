
						<?php
						
						//dd($admincityList);
						?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="city" required="" id="city" >
							        <option value="">Select City</option>
                                            @foreach($admincityList as $key=>$admincityList)
                                        <option value="{{$admincityList['id']}}" >{{$admincityList['city']}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>