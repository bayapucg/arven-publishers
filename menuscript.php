 <?php include("header.php"); ?>

        <div class="conainer-fulid">
            <div class="container">
			
                <div class="row">
                
                	<div class="divide-35">
                      
                      <div class="col-md-12">
                      	<div class="col-md-12">
                            <div class="row ">            
                             <form id="defaultForm" method="post" class="" action="menuscript.php">
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Title</label>
								<div class="">
									 <select class="form-control">
									  <option value="volvo">DR</option>
									  <option value="saab">MR</option>
									  <option value="opel">Mrs</option>
									  <option value="audi">Miss</option>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">First Name</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter First Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Last Name</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Last Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">University</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter University" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Country</label>
								<div class="">
									 <select class="form-control">
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
								
									</select>
								</div>
							</div>
                        </div>
					
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Email Id</label>
								<div class="">
									<input type="email" class="form-control" name="username" placeholder="Enter email id" />
								</div>
							</div>
                        </div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Phone Number</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Phone Number" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Manuscript Tittle</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Manuscript Tittle" />
								</div>
							</div>
                        </div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Address</label>
								<div class="">
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Your Message</label>
								<div class="">
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select Journel</label>
									<div class="">
									 <select class="form-control">
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
									  <option value="volvo">india</option>
								
									</select>
								</div>
							</div>
                        </div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Insert Abstract</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Abstract" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select File</label>
								<div class="">
									<input type="file" class="form-control" name="username"  />
								</div>
							</div>
                        </div>
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-6">
						 <div class="form-group">
                            <label class="col-lg-3 control-label" id="captchaOperation"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>
                        </div>
						
					
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-6 ">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
								<a href="#" type="submit" class="btn btn-warning" >Back</a>
                                
                            </div>
                        </div>
						
                    </form>

							</div>
		
                            </div>
                            
                           
                      </div>
                      <div class="clearfix"></div> 
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        </div>
         
      
         <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    remote: {
                        type: 'POST',
                        url: 'remote.php',
                        message: 'The username is not available'
                    },
                    different: {
                        field: 'password,confirmPassword',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            birthday: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birthday is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
          
        </div><?php include("footer.php"); ?>
