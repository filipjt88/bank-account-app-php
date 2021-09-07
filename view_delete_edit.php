<?php include('parts/init.php');
$result = getAllUsers();
?>
<?php include('parts/header1.php'); ?>

<?php include('parts/header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
		<h1 class="display-4 text-center mb-4">Edit / Delete user</h1>
			<table class="table table-striped">
				<thead class="bg-dark text-light">
					<tr>
						<th>First name</th>
						<th>Last name</th>
						<th>Email</th>
						<th>Depozit</th>
						<th>Credit card</th>
						<th>Delete user</th>
						<th>Update user</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($result as $users): ?>
						<tr>
                       <td> <?php echo $users["first_name"]; ?></td>
                       <td> <?php echo $users["last_name"]; ?></td>
                       <td> <?php echo $users["email"]; ?></td>
                       <td> <?php echo $users["depozit"]; ?></td>
                       <td> <?php echo $users["credit_card"]; ?></td>
                       <td><a href="delete_user.php?id=<?php echo $users['id']; ?>"><button class="btn btn-danger form-control btn-lg"><i class="far fa-trash-alt"></i></button></td></a>
                       <td><a href="update.php?id=<?php echo $users['id']; ?>"><button class="btn btn-warning form-control btn-lg"><i class="far fa-edit"></i></button></td></a>
                   </tr>	
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



	
<?php include('parts/footer.php'); ?>

