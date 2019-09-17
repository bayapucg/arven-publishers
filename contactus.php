 <?php include("header.php"); ?>
		<br>
		<br>
       <div class="contact-us">
       <div class="container">
	   	<div class="section-heading py-4">
					<h2>Contact  <span>us </span> </h2>
					<span>
						<img src="img/logo.png" alt="icon">
					</span>
					
				</div>	
          <div class="contact-form">
           <div class="row">               
               <div class="col-sm-12">
			   <form id="defaultForm" method="post" class="" action="menuscript.php">
					
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label"> Enter First Name</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter First Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label"> Enter Last Name</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Last Name" />
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
					
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Your Message</label>
								<div class="">
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</div>
                        </div>
					
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-6">
						 <div class="form-group">
                            <label class="col-lg-6 control-label" id="captchaOperation"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>
                        </div>
						
					
						<div class="clearfix">&nbsp;</div>
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-6 ">
                                <button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Submit</button>
								
                                
                            </div>
                        </div>
						
                    </form>
			   </div>
			   </div>
			   <div class="clearfix">&nbsp;</div>
			   <hr>
			   <div class="clearfix">&nbsp;</div>
			     <div class="row ">
               <div class="col-sm-6">
                   <div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
                       </div>
                       <div class="col-xs-9">
                       <strong>ARVEN BIOPRODUCTIONS PVT</strong><br>
                           9-295, Shanthi Nagar, Srikalahasti - 517644
Andhra Pradesh, India
                       </div>
                   </div>
                   
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>   Phone
                        </div>
                        <div class="col-sm-9">
                            7095126276
                        </div>
                    </div>
                    
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>   Email
                        </div>
                        <div class="col-sm-9">
                        <a href="#">contact@arven.com</a> 
                        </div>
                    </div><br>
               </div>
			   <div class="col-sm-6">                     
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.317253459822!2d79.70807241434545!3d13.75973189034231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d3e4448ef4565%3A0x31929095465dad3!2s9-301%2F8%2C%20Santhi%20Nagar%2C%20Srikalahasti%2C%20Andhra%20Pradesh%20517644!5e0!3m2!1sen!2sin!4v1568537424242!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
