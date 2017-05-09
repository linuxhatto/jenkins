				    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> List User</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
									<?php
										echo '<thead>';
										echo '<th>' . "Username" . '</th>';
										echo '<th>' . "Email" . '</th>';
										echo '<th>' . "Action" . '</th>';
										echo '</thead>';
										foreach($user as $user_list){									
										echo '<tbody>';
										echo '<tr>';
										echo '<td>' . $user_list->username .  '</td>'.'<td>' . $user_list->email .  '</td>'.'<td>' . '<a href="'. URL::base() . 'index.php/create/delete/' . $user_list->id . '">Delete</a> '. '<a href="'. URL::base() . 'index.php/create/edit/' . $user_list->id . '">Edit</a> '.'</td>';
										echo '</tr>';
										echo '</tbody>';
										} 	
									?>
                                    </table>
                                </div>
								
									  <form>
										<button type="submit" class="btn btn-default" formaction="<?php URL::Base()?>Create/create">Create User</button>
									  </form>

                            </div>
                        </div>
                    </div>