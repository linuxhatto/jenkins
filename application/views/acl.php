				    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> List ACL <?php echo $userLoc; ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
									<?php
										echo '<thead>';
										echo '<th>' . "Ip/Mask" . '</th>';
										echo '<th>' . "Localization" . '</th>';
										echo '<th>' . "Action" . '</th>';
										echo '</thead>';
										foreach($acl as $acl_ip){									
										echo '<tbody>';
										echo '<tr>';
										echo '<td>' . $acl_ip->ip .  '</td>'. '<td>' . $acl_ip->localization  . '</td>' . '<td>' . '<a href="'. URL::base() . 'index.php/Acl/delete/' . $acl_ip->id . '">Delete</a> '. '<a href="'. URL::base() . 'index.php/Acl/edit/' . $acl_ip->id . '">Edit</a> '.'</td>';
										echo '</tr>';
										echo '</tbody>';
										} 	
									?>
                                    </table>
                                </div>
								
									  <form>
										<button type="submit" class="btn btn-default" formaction="<?php URL::Base()?>Acl/create">Create</button>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#save">Save</button>
									  </form>
								
								
										<div class="modal fade" id="save"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Confirm</h4>
											</div>
											<div class="modal-footer">
											<form>
												<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
												<button type="submit" class="btn btn-primary" formaction="<?php URL::Base()?>Acl/save">Yes</button>
											</form>
											</div>
											</div>
											</div>
										</div>
                            </div>
                        </div>
                    </div>