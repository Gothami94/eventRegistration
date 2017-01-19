<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container">
		<hr />
		<h2>Make My Payment</h2>
		<hr/>

    <?php if (isset($message)) { ?> <CENTER><h4 style="color:green;"><?php print_r($message);?></h4></CENTER><br><?php }?>

		<table class="table table-hover">
			<thead>
				<tr>
          <th>Ticket ID</th>
					<th>Event Name</th>
					<th>Price</th>
          <th>Qty</th>
				</tr>
			</thead>
			<tbody>
        <?php
					$event_name="";
					$price="";
					$rate=1;
					foreach($table as $row){
						$event_name=$row->event_name;
						$price=$row->price;
						$rate=1;
						$ticket_id=$row->ticket_id;
			echo '<tr>';
      echo '<td>'.$row->ticket_id.'</td>';
      echo '<td>'.$row->event_name.'</td>';
			echo '<td>'."Rs.".$row->price.".00".'</td>';
			echo '<td>'."1".'</td>';

			}
			?>
				</tbody>
		</table>
		<?php
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
	$paypal_id = 'gothamikarunarathna-facilitator@gmail.com'; //Business Email


	?>
  <form action="<?=$paypal_url; ?>" method="post">
      <!-- Identify your business so that you can collect the payments. -->
      <input type="hidden" name="business" value="<?=$paypal_id?>">
      <!-- Specify a Buy Now button. -->
      <input type="hidden" name="cmd" value="_xclick">
       <!-- Specify details about the item that buyers will purchase. -->
      <input type="hidden" name="item_name" value="<?=$event_name ?>">
      <input type="hidden" name="item_number" value="<?=$ticket_id ?>">
      <input type="hidden" name="item_price" value="<?=$price?>">
      <input type="hidden" name="amount" value="<?=$rate?>">
      <input type="hidden" name="currency_code" value="USD">

      <!-- Specify URLs -->
      <!-- <input type='hidden' name='cancel_return' value='http://localhost/Gym/PaymentCancel'> -->
      <input type='hidden' name='return' value='http://localhost:8888/eventRegistration/index.php/buyTicket?tx=<?=$event_name?>&item_price=<?=$price?>&amt=<?=$rate?>&cc=USD&st=1'>

                                    <!-- Display the payment button. -->
			<button type="submit" class="btn btn-primary" name="submit">Make Payment</button>
      <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
  </form>
    </div>
  </body>
</html>
