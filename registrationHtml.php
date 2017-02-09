<div id="error"></div>
<div class="panel panel-info registration col-md-4 col-md-offset-4">
    <div class="row">
		<div class="form-group col-md-6">
			<label class="control-label" for="firstName">First name</label>
				<input type="text" class="form-control" id="firstName" placeholder="First Name" />
	     </div>
	     <div class="form-group col-md-6">
	     	<label class="control-label" for="lastName">Last name</label>
	     		<input type="text" class="form-control" id="lastName" placeholder="Last Name" />
	     </div>
	</div>       
	<div class="row"> 
	    <div class="form-group col-md-12">
	        <label class="control-label" for="userMail">Email address</label>
	        <input type="email" class="form-control" id="userMail" placeholder="Email" />
	    </div>
    </div>
    <div class="row">
		<div class="form-group col-md-6">
			<label class="control-label" for="firstName">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password" />
	     </div>
	     <div class="form-group col-md-6">
	     	<label class="control-label" for="lastName">Confirm password</label>
	     		<input type="password" class="form-control" id="c_password" placeholder="Confirm password" />
	     </div>
    </div>
    <div class="form-group btn-container">
         <div class="col-sm-12 controls text-center">
          <input type="hidden" name="register" id="register" value="" />
          <button id="registerButton" class="btn btn-success dynamicClick">Register</button>
         </div>
         <div class="col-md-12 text-center">
         	<div class="bottom-link">
         		<a href="index.php" id=''>Already have account? Sign In</a>
         	</div>
         </div>
     </div>   
    
</div>
