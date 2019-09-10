<?php include("../header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Student
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
             <div class="h4 text-white"><i class="fa fa-bus" aria-hidden="true"></i>&nbsp; Transportation Details  </div>
            </div>
			<div class="col-md-6">
              <div class="pull-right">
			  	<a class="btn btn-default st-btn add-student-btn" href="add-transport.php"><i class="fa fa-plus"></i> Add New</a>
              </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Roll No.</th>
                  <th>Vehicle Number</th>
                  <th>Driver Name</th>
                  <th>Driver Phone</th>
                  <th>Route Fees</th>
                  <th>Vehicle Route </th>
                  <th>View / Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>TS 08 XS 6382</td>
                  <td>Lorem Parent</td>
                  <td>8500226782</td>
                  <td>1500</td>
                  <td>4A</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
				<tr>
                  <td>2</td>
                  <td>TS 08 XS 6382</td>
                  <td>Lorem Parent</td>
                  <td>8500226782</td>
                  <td>1500</td>
                  <td>4A</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
				<tr>
                  <td>3</td>
                  <td>TS 08 XS 6382</td>
                  <td>Lorem Parent</td>
                  <td>8500226782</td>
                  <td>1500</td>
                  <td>4A</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr><tr>
                  <td>4</td>
                  <td>TS 08 XS 6382</td>
                  <td>Lorem Parent</td>
                  <td>8500226782</td>
                  <td>1500</td>
                  <td>4A</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
				<tr>
                  <td>5</td>
                  <td>TS 08 XS 6382</td>
                  <td>Lorem Parent</td>
                  <td>8500226782</td>
                  <td>1500</td>
                  <td>4A</td>
                  <td><a href="" data-toggle="modal" data-target="#squarespaceModal"  title="View"><i class="fa fa-eye btn btn-success"></i></a> 
					  <a href="edit-student.php"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
					  <a href=""  data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
				</td>
                </tr>
				
                
                </tbody>
                <tfoot>
             <tr>
                  <th>Roll No.</th>
                  <th>Vehicle Number</th>
                  <th>Driver Name</th>
                  <th>Driver Phone</th>
                  <th>Route Fees</th>
                  <th>Vehicle Route </th>
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