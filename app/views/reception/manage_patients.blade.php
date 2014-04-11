
@section('main')				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-content">
								@if(Session::has('message'))
								<div class="alert alert-info" id="message">{{ Session::get('message') }}</div>
								@endif
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Patients</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Add Patient</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane " id="2">
						
											<form id="edit-profile" class="form-horizontal" action="patients/add" method="post">
                                                <fieldset>
                                              
                                                     <div class="control-group"> 
                                                    <label class="control-label" for="first_name">First name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" value="" name="first_name" >
                                                            
                                                        </div> <!-- /controls --> 
                                                        </div>
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="middle_name">Middle name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" value="" name="middle_name">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="last_name">Last name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" value="" name="last_name">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="birth_date">Birth of Date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="birth_date">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="address">Address</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="address">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                     <div class="control-group">                                         
                                                        <label class="control-label" for="contact">Contact</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="contact">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="username">Gender</label>
                                                        <div class="controls">
                                                        	{{Form::select('gender',array('Male'=>'Male','Female'=>'Female'))}}
                        	
                                                        </div>
                                                                     
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="pull-right">
                                                        <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Register</button>
                                                    </div>
                                                </fieldset>
                                            </form>
										</div>
										
										<div class="tab-pane active" id="1">
											<div class="widget widget-table">
										
												<div class="widget-header">

													<i class="icon-th-list"></i>
													<h3>Patients list</h3>
												</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered" id="lTable">
													  <?php	$patients = Patient::all();					
															?>
														
														<thead>
															<tr>
																<th>#</th>
																<th>First Name</th>
																<th>Middle Name</th>
																<th>Last Name</th>
																<th>Gender</th>
																<th>Date of Birth</th>
																<th>Contact</th>
																<th>Action</th>
																<th>&nbsp;</th>
															</tr>
														</thead>
														
														<tbody>
														@foreach($patients as $patient)
															<tr>
																<td>{{$patient->id}}</td>
																<td>{{$patient->first_name}}</td>
																<td>{{$patient->middle_name}}</td>
																<td>{{$patient->last_name}} </td>
																<td>{{$patient->gender}}</td>
																<td>{{$patient->birth_date}}</td>
																<td>{{$patient->contact}}</td>
																<td class="action-td">
																	<a href="{{URL::to('patients/edit/' . $patient->id )}}" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>					
																	<a href="{{URL::to('patients/delete/' . $patient->id )}}" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															@endforeach
															
			
															
															
														</tbody>
													</table>
												
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	


@stop