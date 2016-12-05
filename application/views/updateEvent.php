<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
	<title>Namel Malini Theatre</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/styleCSS.css">

</head>
<body>


<div class="container-fluid text-center">
	<div class="row content">
		<div class="col-xs-4 sidenav">
		</div>

		<div class="col-xs-4 text-left">
			<h3>Update Event</h3>

			<form method="post" action="update_event.php" name="updateEvent">
				<div class="form-group">
					<label>Event Id</label><br>
					<input type="text" class="form-control" id="id" name="event_id" value="<?php echo $row->event_id; ?>" readonly>
				</div>
				<div class="form-group">
					<label>Event Name</label><br>
					<input type="text" class="form-control" id="name" name="event_name" value="<?php echo $row->event_name; ?>" required>
				</div>
				<div class="form-group">
					<label>Event Provider</label><br>
					<input type="text" class="form-control" id="provider" name="event_provider" value="<?php echo $row->event_provider; ?>" required>
				</div>
				<div class="form-group">
					<label>Category</label><br>
					<select  name="category" class="form-control" required>
						<option value="Dancing Show">Dancing Show</option>
						<option value="Cultural Show">Cultural Show</option>
						<option value="Movie">Movie</option>
						<option value="Stage Drama">Stage Drama</option>
						<option value="Music Event">Music Event</option>
					</select>
				</div>
				<div class="form-group">
					<label>Date</label> <br>
                    <input type="date" class="form-control" id="date" name="e_date" value="<?php echo $row->e_date; ?>" required>
				</div>
				<div class="form-group">
					<label>Start time</label><br>
                    <input type="time" class="form-control" id="stime" name="start_time" value="<?php echo $row->start_time; ?>" required>

				</div>
				<div class="form-group">
					<label>End time</label><br>
                    <input type="time" class="form-control" id="etime" name="end_time" value="<?php echo $row->end_time; ?>" required>

				</div>
				<button type="submit"  name="save" class="button1">Save</button>
				<a href="index.php" class="button2">Cancel</a>

			</form>


		</div>

		<div class="col-xs-4 sidenav">
		</div>

	</div>
</div>


</body>
</html>
