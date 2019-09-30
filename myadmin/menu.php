<?php
include 'layout.php';
include 'conn.php';
css();
navbar();



?>
<?php

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $link = $_POST['link'];

        if(isset($_REQUEST["status"]))
          $status = 1;
        else
          $status=0;

        $sql = mysqli_query($conn,"insert into menus (title,link,status) values ('$title','$link','$status')");

        if ($sql==true) {?>
         <div class="alert alert-success alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Menu is Added.
        </div>
         <?php   
        }
    }

    


?>



                <div class="panel panel-primary">
                    <div class="panel-heading">
                     Menu
                     <button style="float: right;" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add Menu</button>    
                    </div>
                    <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Menu</h4>
                              </div>
                              <div class="modal-body">
                                <form action="" method="post">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-8 offset-md-4">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <label>Link</label>
                                                <input type="text" name="link" class="form-control">
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <label class="form-check-label" for="inlineCheckbox1">Status</label>
                                                <br>
                                                <input type="checkbox" name="status" class="form-check-inline  form-check-input" >&nbsp; Active
                                            </div>

                                            <div class="col-md-8 offset-md-4">
                                                <br>
                                                <input type="submit" name="submit" class="btn btn-primary ">
                                                <input type="reset" name="submit" class="btn btn-info ">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                      <div class="panel-body">
                         
                             <div class="container-fluid">
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu</th>
                                    <th>Link</th>
                                    <th>Satatus</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                      
                    
                                <tbody>
                                
                                <?php
                               $query = mysqli_query($conn,"select * from menus");
                               $i =1;
                                while ($row = mysqli_fetch_array($query)) {?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                           <td><?php echo $row['title']?></td>
                                           <td><?php echo $row['link']?></td>
                                           <td>
                                               <?php  $x = $row['status'] ? 'Active' : 'Deactive';
                                               if ($x=="Active") {
                                                echo "<a href='#' class='btn btn-success btn-xs' >$x</a>";

                                            }
                                            else
                                            {   
                                                echo "<a href='#' class='btn btn-danger btn-xs' >$x</a>";

                                            }
                                               ?>
                                           </td>
                                           
                                           <td>
                                            <a href="#"><i class="fa fa-search" type="button"  data-toggle="modal" data-target="#myModal1" title="View"></i></a>
                                            &nbsp;&nbsp;
                                            <a href="#" class="btn-success"><i class="fa fa-edit" type="button"  data-toggle="modal" data-target="#myModalEdit<?php echo $row['id'];?>" title="Edit"></i></a>
                                            &nbsp;&nbsp;
                                            <a href="#" class="btn-danger"><i class="fa fa-trash" type="button"  data-toggle="modal" data-target="#myModalDelete<?php echo $row['id'];?>" title="Delete" ></i></a>
                                               <!-- Modal -->
                        <div id="myModalEdit<?php echo $row['id'];?>" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Menu</h4>
                              </div>

                              <div class="modal-body">
                                <form action="" method="post">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <?php
                                            $id = $_REQUEST['update'];
                                   $data = mysqli_query($conn,"select * from menus where id='$id'");

                                 while ($rows = mysqli_query($data)) {?>

                                    <div class="col-md-8 offset-md-4">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $row['title']?>">
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <label>Link</label>
                                                <input type="url" name="link" class="form-control">
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <label class="form-check-label" for="inlineCheckbox1">Status</label>
                                                <br>
                                                <input type="checkbox" name="status" class="form-check-inline  form-check-input" >&nbsp; Active
                                            </div>

                                            <div class="col-md-8 offset-md-4">
                                                <br>
                                                <input type="submit" name="submit" class="btn btn-primary ">
                                                <input type="reset" name="submit" class="btn btn-info ">
                                            </div>

                               <?php 
                            }

                              ?>

                                                                                    </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                    
                         <div id="myModalDelete<?php echo $row['id'];?>" class="modal fade" role="dialog" >
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Menu</h4>
                              </div>
                              <div class="modal-body">
                                <strong>Are you sure </strong>Delete Menu
                              </div>
                              <div class="modal-footer">
                                
                                <?php echo"<a href='delete.php?delete=$row[id]' class='btn btn-danger btn-sm'>OK</a>";?>
                                
                            <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    
                                </form>
                                
                                
                              </div>
                            </div>

                          </div>
                        </div>
                    
                                           </td>
                                </tr>
                                <?php    
                                }


                                ?>
                                    
                                </tbody>
                    
                                </table>
                            </div>


                                 
                             </div>
                         

              
                      </div>

                </div>

                