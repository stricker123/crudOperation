
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin Login</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
<body>
<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form name="frm1" method="POST" action="logina.php">
						<div class="form-group">
							<label>NAME</label>
							<input type="text" name="name"  class="form-control"  required>
						</div>
						<div class="form-group">
							<label>ADDRESS</label>
							<input type="text" name="add"  class="form-control"  required>
						</div>
						<input type="submit" class="btn btn-success" name="submit" value="submit">  
				</form>
			</div>
		</div>
	</div>
</header>
</body>
</html>