<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Member Login - POS</title>
<!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'assets/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'css/sb-admin.css'?>" rel="stylesheet">

   
  </head>
  <body class="login-bg" style="background-color:#002347;">
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style='text-align:center'><h2><b>MEMBER LOGIN</b></h2></div>
      <div class="card-body">
            <div class="content-wrap">
				  <div style="text-align:center">
			      <img  width="310px" src="<?php echo base_url().'assets/img/login-logo.png'?>"/>
				  </div>
			           <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post">
	                        	<input class="form-control" type="text" name="username" placeholder="Username" required>
				                <input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
				                <div class="action">
				                    <button type="submit" class="btn btn-lg " style="width:310px;margin-top:0px; bg-color:#ff9000;">Login</button>
				                </div>
	                        </form>
			</div>
      </div>
    </div>
  </div>
  
<!--
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <img width="310px" src="<?php echo base_url().'assets/img/logo.png'?>"/>
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post">
	                        	<input class="form-control" type="text" name="username" placeholder="Username" required>
				                <input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
				                <div class="action">
				                    <button type="submit" class="btn btn-lg " style="width:310px;margin-top:0px; bg-color:#ff9000;">Login</button>
				                </div>
	                        </form>
			                                
			            </div>
			        </div>

			        <div class="already">
			            <p>Username: admin<br/> Password: admin</p>
			            
			        </div>
			    </div>
			</div>
		</div>
	</div>
-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>