<?php include("../header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Classes List
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
           &nbsp;
            </div>
			<div class="col-md-6">
              <div class="pull-right">
			  	<a class="btn btn-default st-btn add-student-btn" href="add-class.php"><i class="fa fa-plus"></i> Add Class</a>
              </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Class Number</th>
                  <th>Class Name</th>
                  <th>Teacher Incharge</th>
                  <th>Number of Students</th>
                  <th>Capacity</th>
                  <th>Location</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>8th</td>
                  <td>Lorem Teacher</td>
                  <td>120</td>
                  <td>140</td>
                  <td>Hyderabad</td>
                  <td>
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
                
                </tbody>
                <tfoot>
                  <tr>
                  <th>#</th>
                  <th>Class Number</th>
                  <th>Class Name</th>
                  <th>Teacher Incharge</th>
                  <th>Number of Students</th>
                  <th>Capacity</th>
                  <th>Location</th>
                  <th> Edit / Delete</th>
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