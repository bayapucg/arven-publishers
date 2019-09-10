<?php include("../header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Parents List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header bg-primary">
            <div class="col-md-6">
              <select class="form-control">
				<option>Select Class Name</option>
				<option>1st class</option>
				<option>2nd class</option>
				<option>3rd class</option>
              </select>
            </div>
			<div class="col-md-6">
              <div class="">
			  	<a class="btn btn-default st-btn add-student-btn" href="add-student.php"><i class="fa fa-plus"></i> Add Parent</a>
				<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-print"></i> Print </button>	
				<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-upload"></i> Import </button>
                
                
                
              </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Parent Name</th>
                  <th>Student Name</th>
                  <th>Parent's Email ID</th>
                  <th>Phone</th>
                  <th>View / Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Lorem Father</td>
                  <td>Lorem Student</td>
                  <td>lorem@gmail.com</td>
                  <td>8500226782</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Parent Name</th>
                  <th>Student Name</th>
                  <th>Parent's Email ID</th>
                  <th>Phone</th>
                  <th>View / Edit / Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include("../footer.php"); ?>