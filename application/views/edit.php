<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ACL IPS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Records
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" action="<?php URL::Base()?><?php echo $entrada->id;?>" method="post" >
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="ip" value="<?php echo $entrada->ip;?>">
											<br>
                                        </div>
										<br>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
										<div class="form-group">
										<br><button type="submit" class="btn btn-default" formaction="<?php URL::Base()?>Acl">Back</button>
										</div>
                                    </form>
									
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
	</div>
</div>

