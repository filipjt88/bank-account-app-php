<?php include('parts/header1.php'); ?>

<?php include('parts/header.php'); ?>
	


<div class="container">
	<div class="row">
		<div class="col-8 offset-2 mt-5">
			<h1 class="display-4 text-center mb-4">Add user</h1>
			<form action="insert_user.php" method="POST">
				<input type="text" class="form-control" name="first_name" placeholder="First name"><br>
				<input type="text" class="form-control" name="last_name" placeholder="Last name"><br>
				<input type="password" class="form-control" name="password" placeholder="Password"><br>
				<input type="email" class="form-control" name="email" placeholder="Email"><br>
				<input type="text" class="form-control" name="depozit" placeholder="Depozit"><br>
				<input type="text" class="form-control" name="credit_card" placeholder="Credit card"><br>
                <button type="submit" class="form-control btn btn-success">Insert user</button>
			</form>
		</div>
	</div>
</div>

<?php include('parts/footer.php'); ?>
