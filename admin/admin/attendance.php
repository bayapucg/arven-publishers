<?php include("../header.php"); ?>
<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Attendance</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="defaultForm" method="post" class="" action="attendance.php">
						<div class="col-md-6">
							<h3 class="box-title">Today's Attendance</h3>
							<div class="form-group">
								<label class=" control-label">Select Class</label>
								<div class="">
									<select class="form-control" id="Bloodgroup" name="s_bloodgrp">
										<option value="">Select Class</option>
										<option value="O+">2nd class</option>
										<option value="O+">6th class</option>
										<option value="O+">10th class</option>
										<option value="O+">7th class</option>
							
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class=" control-label">Date</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter date" />
								</div>
							</div>
							<div class="form-group">
                            <div class="">
                             <button id="AttendanceEnter" name="attendance" class="btn btn-primary">Add/Update</button>
							
                                
                            </div>
                        </div>
                        </div>
						<div class="col-md-6">
							<h3 class="box-title">View Today's Attendance Report</h3>
							<div>
								<span class="h4">VII E</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							<div>
								<span class="h4">VII E</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							<div>
								<span class="h4">VII E</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							<div>
								<span class="h4">VII E</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							<div>
								<span class="h4">IV</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							<div>
								<span class="h4">V</span>
								<span class="pull-right">20/250</span>
								<div class="progress" style="height:9px;">
								
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:25%">
									  <span class="sr-only">80% Complete</span>
									</div>
								</div>
							</div>
							
						</div>
						
						
					
						<div class="clearfix">&nbsp;</div>
						  
						
                    </form>
					<div class="clearfix">&nbsp;</div>
          </div>
          </div>
          <!-- /.box -->

         

        </div>
      
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section> 
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

<?php include("../footer.php"); ?>