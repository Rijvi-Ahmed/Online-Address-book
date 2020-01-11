<?php 

	if (isset($_GET['id'])) {

		$contact_id = $_GET['id'];

		require_once"connection.php";

		$contacts = array();

		$all_contacts = "select * from contacts where contact_id = '$contact_id'";

		$sql_all_contacts = $conn->query($all_contacts);

		$total_contacts = $sql_all_contacts->num_rows;

		while ($row = mysqli_fetch_assoc($sql_all_contacts)) {
			$contacts[] = $row;
		}

		foreach ($contacts as $contact);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<?php include"includes/header.inc"; ?>

		<!-- content section -->
		<div class="content">
				<div class="floatl"><h1><?php echo $contact["contact_fname"] . " " . $contact["contact_lname"]; ?></h1></div>
				<a class="floatr" href="index.php"><input class="cancel_contact_button" type="button" value="Home"></a>
				<div class="clear"></div>
				<hr>
			
					<div class="contact_info">
						<p><b>Nickname</b>: <?php echo $contact["contact_nickname"] ?></p>
						<p><b>Cell Phone:</b> <?php echo $contact["contact_cphone"] ?></p>
						<p><b>Address:</b> <a href="http://maps.google.com/?q=<?php echo $contact["contact_address"] . " " . $contact["contact_city"] . ", " . $contact["contact_state"] . " " . $contact["contact_zipcode"]?>"><?php echo $contact["contact_address"] . " " . $contact["contact_city"] . ", " . $contact["contact_state"] . " " . $contact["contact_zipcode"]?></a></p>
						
					</div>
					<div class="clear"></div>
				
			</div>
		</div>
	</div>	
</body>
</html>		