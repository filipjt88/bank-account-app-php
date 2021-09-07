<?php include('parts/header1.php'); ?>

<?php include('parts/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<form action="update_record.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
				<input type="text" class="form-control" name="first_name" value="<?php echo $result['first_name']; ?>"><br>
				<input type="text" class="form-control" name="last_name" value="<?php echo $result['last_name'];  ?>"><br>
				<input type="password" class="form-control" name="password" value="<?php echo $result['password'];  ?>"><br>
				<input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>"><br>
				<input type="text" class="form-control" name="depozit" value="<?php echo $result['depozit']; ?>"><br>
				<input type="text" class="form-control" name="credit_card" value="<?php echo $result['credit_card']; ?>"><br>
                <button type="submit" class="form-control btn btn-warning">Update user</button>
			</form>
		</div>
	</div>
</div>