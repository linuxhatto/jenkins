				    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Create ACL</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <form name="form1" id="ipForm" action="<?php URL::Base()?><?php echo $entrada->id;?>" method="post" >
                                        <div class="form-group">
                                            <label>Address Ip</label>
                                            <input class="form-control" name="ip" placeholder='xxx.xxx.xxx.xxx/xx'value="<?php echo $entrada->ip;?>">
											<br>
                                        </div>
										<br>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
									
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>


			<script>
					$(document).ready(function() {
						$('#ipForm').formValidation({
							framework: 'bootstrap',
							icon: {
								valid: 'glyphicon glyphicon-ok',
								invalid: 'glyphicon glyphicon-remove',
								validating: 'glyphicon glyphicon-refresh'
							},
							fields: {
								ip: {
									validators: {
										ip: {
											message: 'Please enter a valid IP address'
										}
									}
								}
							}
						});
					});
					</script>