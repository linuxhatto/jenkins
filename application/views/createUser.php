				    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Create User</h3>
                            </div>
                            <div class="panel-body">				
						
<form action="<?=URL::Base(true)?>index.php/create/create" method="post" data-toggle="validator" role="form">
  <? if (isset($messages)){	echo $messages;} ?>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
	 <div class="help-block with-errors"></div>
  </div>
  
   <div class="form-group">
    <label for="exampleusername">UserName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
  </div>
 <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-inline row">
      <div class="form-group col-sm-6">
        <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
      <div class="form-group col-sm-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>
<div class="form-group">
		<label>Localization</label>
		<select name="localization">
			<option value="Argentina">Argentina</option>
			<option value="Brasil">Brasil</option>
			<option value="Colombia">Colombia</option>
			<option value="Peru">Peru</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Venezuela">Venezuela</option>
			<option value="EUA">EUA</option>
		</select>
		</div>
		<button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Submit</button>
		</form>
		<br>
		<a href="<?=URL::Base(True)?>index.php/Create" class="btn btn-primary active" role="button">Back</a>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Exit</h4>
      </div>
    </div>
  </div>
</div>