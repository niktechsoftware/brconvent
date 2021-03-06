                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            		<div class="row">
                            			<div class="col-md-12">
                            				<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/saveGallery" method="post" enctype="multipart/form-data">
		                                        <?php $raj=$this->uri->segment(3);
		                                        if($raj==23)
		                                        {
		                                        echo "Successfully Uploaded Image";
		                                        	
		                                        }?>
		                                        
		                                        
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-3 control-label">Title</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" id="input-Default" required name="title">
		                                            </div>
		                                        </div>
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-3 control-label">Image Type</label>
		                                            <div class="col-sm-9">
		                                               <select name="img_type" class="form-control">
		                                                   <option>-Select Image-</option>
		                                                   <option value="annual">Annual</option>
		                                                   <option value="sports">Sports</option>
		                                                    <option value="other">Other</option>
		                                               </select>
		                                            </div>
		                                        </div>
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-3 control-label">Description</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" id="input-Default" required name="desc">
		                                            </div>
		                                        </div>
		                                        <div class="form-group">
		                                            <label class="col-sm-3 control-label">Gallery Image (Max. 1000kb)</label>
		                                            <div class="col-sm-9">
		                                            	<input type="file" required name="selectedStu" />
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-3 col-sm-9">
		                                            <button type="submit" class="btn btn-success">Upload Image</button>
		                                         </div>
		                                    </form>
                            			</div>
                            		</div>
                            	<br/><hr/><br/>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("gallery")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                              <td><img width="50" height="50" src="<?php echo base_url();?>assets/images/<?php echo $row->image; ?>" alt="" /></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteGallery/<?php echo $row->sno;?>">
                                                		Delete
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->