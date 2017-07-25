<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

		<title>Login  · Bootstrap + PHP</title>

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container-fluid">    
	        <div style="margin-top: 100px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	            <div class="panel panel-info" >
	                <div class="panel-heading">
	                    <div class="panel-title">Login</div>
	                </div>     

	                <div class="panel-body" >	                        
	                    <form id="login" role="form" method="post" action="login.php">

	                    	<!-- Input de e-Mail -->	                                
	                        <div style="margin-bottom: 25px" class="input-group">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                            <input id="login" type="text" class="form-control" name="login" placeholder="Login">                                        
	                        </div>
	                            
	                    	<!-- Input de Senha -->	
	                        <div style="margin-bottom: 25px" class="input-group">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	                            <input id="senha" type="password" class="form-control" name="senha" placeholder="Senha">
	                        </div>

	                    	<!-- Botão de Envio -->	
	                        <div class="row">
	                        	<div class="col-sm-1 col-sm-offset-5">
			                        <div class="form-group">
			                            <div class="col-sm-12 controls">
			                              	<button type="submit" class="btn btn-success">Login</button>
			                            </div>
			                        </div>
	                        	</div>
	                        </div>
	                    </form>     
	                </div>                     
	            </div>  
	        </div> 
	    </div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>