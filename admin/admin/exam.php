<?php include("../header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Exams
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
			  	<a class="btn btn-default st-btn add-student-btn" href="add-exam.php"><i class="fa fa-plus"></i> Add Exam</a>
              </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Exam Name</th>
                  <th>Class Name</th>
                  <th>Subject Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Week Test</td>
                  <td>8th</td>
                  <td>Mathamatics</td>
                  <td>02-01-2018</td>
                  <td>12-01-2018</td>
                  
             
                  <td>
					  <a href="#"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
                
                </tbody>
                <tfoot>
               <tr>
                  <th>#</th>
                  <th>Exam Name</th>
                  <th>Class Name</th>
                  <th>Subject Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Edit / Delete</th>
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