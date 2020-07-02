<html>
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body style=" background-color: black;">
<?php
global $wpdb;
   $table_name = $wpdb->prefix . "owt_boiler_table";
   $data=$wpdb->get_results($wpdb->prepare("select * from wp_owt_boiler_table"));
   echo $data;
	?>
<br><br><br><br><br>
<center><h1 style="color:white;font-size:40px">HELLO <?php echo $data->name?> you are loged ...</h1></center>
	<table class="table" style="background-color:blue">
  <thead  style="background-color:black;color:white">
    <tr>
    
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($data)>0)
		 {
		  foreach($data as $row=>$data){ ?>
    <tr>
      <td><?php echo $data->name?></td>
      <td><?php echo $data->email?></td>
      <td><?php echo $data->phone_no?></td>
    </tr>
	<?php }
		      }
		?>
  </tbody>
</table>
</div>



</body>
</html>