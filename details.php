<?php 
    //include('config/db_connect.php');
    include 'dbaccess.php';
	if(isset($_POST['delete'])){
		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
		$sql = "DELETE FROM properties WHERE id = $id_to_delete";
		if(mysqli_query($conn, $sql)){
			header('Location: index.php');
		} else {
			echo 'query error: '. mysqli_error($conn);
		}
	}
	// check GET request id param
	if(isset($_GET['id'])){

		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);
		// make sql
		$sql = "SELECT * FROM properties WHERE id = $id";
		// get the query result
		$result = mysqli_query($conn, $sql);
		// fetch result in array format
		$home = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
	}
?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<div class="container center grey-text">
		<?php if($home): ?>
			<h4><?php echo $home['house_name']; ?></h4>
			<p>Rent -> <?php echo $home['rate']; ?></p>
			<p>Owner -> <?php echo $home['house_owner']; ?></p>
			<h5>Details:</h5>
			<p><?php echo $home['details']; ?></p>

			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $home['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such home exists.</h5>
		<?php endif ?>
	</div>

	<?php include('templates/footer.php'); ?>

</html>