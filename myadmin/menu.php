<?php
include 'layout.php';
css();
navbar();



?>
                <div class="panel panel-primary">
                     <div class="panel-heading">Menu</div>
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
                                <tr>
                                    
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                    <td>
                                     <a class="btn blue btn-sm" data-toggle="modal" rel="tooltip" title="View Details" href="#view<?php echo $id ;?>"  >
                                        <i class="fa fa-search"></i></a>
                                        
                        <div class="modal fade" id="view<?php echo $id ;?>"  tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><b>Details</b></h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-condensed table-bordered" width="100%">
                                                <tr>
                                                <th>#</th>
                                                <th>Event Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                </tr>
                                                
                                                <tbody>
                                                <tr>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                
                                                </td>
                                                </tr>
                                                </tbody>

                                                
                                                </table> 
                                        </div>
                                        <div class="modal-footer">
                                             
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                
                                        
                                        
                                
                                        
                                        
                                        &nbsp;      
                                        <a class="btn yellow btn-sm" rel="tooltip" title="Edit Details" target="_blank" href="event_edit.php?id=<?php echo $id;?>">
                                        <i class="fa fa-edit"></i></a>
                                        &nbsp;              
                                       
<a class="btn red btn-sm" rel="tooltip" title="Delete"  data-toggle="modal" href="#delete<?php echo $id ;?>"><i class="fa fa-trash"></i></a>
            <div class="modal fade" id="delete<?php echo $id ;?>" tabindex="-1" aria-hidden="true" style="padding-top:35px">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <span class="modal-title" style="font-size:14px; text-align:left">Are you sure, you want to delete this event?</span>
                        </div>
                        <div class="modal-footer">
                        <form method="post" name="delete<?php echo $id ;?>">
                            <input type="hidden" name="delet_model" value="<?php echo $id; ?>" />
                                    
                            <button type="submit" name="sub_del" value="" class="btn btn-sm red-sunglo ">Yes</button> 
                        </form>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
        <!-- /.modal-dialog -->
            </div>
                                       
                                       
                                       
                                    </td>
                                </tr>
                                </tbody>
                    
                                </table>
                            </div>


                                 
                             </div>
                         

              
                      </div>

                </div>

                