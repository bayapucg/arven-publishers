<?php include("../header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Teacher List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Teachers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header bg-primary">
            <div class="col-md-6">
             <h4 class="text-white">Subject wise Teachers List</h4>
            </div>
			<div class="col-md-6">
			
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Subjects Handling</th>
                  <th>Full Name</th>
				  <th>Employee Code</th>
                  <th>Incharge Class</th>
				  <th>Phone</th>
                  <th>View </th>
                </tr>
                </thead>
                <tbody>
                <tr>
				  <td> Mathamatics</td>
				  <td>Lorem Ipsum</td>
                  <td>TECh123456</td>
                  <td>5th class</td>
                  <td>8500226782</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  
				</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Roll No.</th>
                  <th>Full Name</th>
                  <th>Parent</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Action</th>
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