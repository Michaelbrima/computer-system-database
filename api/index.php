<!doctype html>
<html>
<html lang="en">	
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	    
        <title>Computer System Database</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="index.css" rel="stylesheet">    
    </head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div id='top'>
    <h1 align="center"> Computer System Database</h1>
<p align="center"> <b> Browse for your ideal computer system by filtering through multiple attributes.</b></p> 

<p align="center"> (Please click on one of the filter buttons below to begin using the database.) </p>
</div>
<br>
	  
	  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" >
   <tr>
   <td width=100>ID:</td> 
  <td width=100>Device</td> 
  <td width=100>Brand
  <form action='<?php echo $_SERVER['PHP_SELF']; 
  ?>' 
  method='post' name='form_filter' >
  <select name="value">
  <option value=null>Select by Brand</option>
  <option value="Nintendo">Nintendo</option>
  <option value="Sony">Sony</option>
  <option value="Valve">Valve</option>
  <option value="Asus">Asus</option>
  <option value="Corsair">Corsair</option>
  <option value="HP">HP</option>
  <option value="Acer">Acer</option>
  <option value="Alienware">Alienware</option>
  <option value="Maingear">Maingear</option>
  <option value="Apple">Apple</option>
  <option value="Dell">Dell</option>
  <option value="HP">HP</option>
  <option value="Maingear">Maingear</option>
</select>
	
    <br />
	
    <input type='submit' value = 'Filter'>

</form></td> 
  <td width=100>Purpose
  <form action='<?php echo $_SERVER['PHP_SELF']; 
  ?>' 
  method='post' name='form_filter' >
  <select name="value">
  <option value=null>Select by Purpose</option>
  <option value="office">Office</option>
  <option value="gaming">Gaming</option>
  </select>
  	
    <br />
	
    <input type='submit' value = 'Filter'>

</form></td> 
  <td width=100>Device Type
    <form action='<?php echo $_SERVER['PHP_SELF']; 
  ?>' 
  method='post' name='form_filter' >
  <select name="value">
  <option value=null>Select by Device Type</option>
  <option value="desktoppc">Desktop PC</option>
  <option value="handheld">Handheld</option>
  
  </select>
    	
    <br />
	
    <input type='submit' value = 'Filter'>

</form></td>
  <td width=100>CPU</td> 
  <td width=100>GPU</td> 
  <td width=100>Memory</td>
  <td width=100>Storage</td>
  <td width=100>Price</td>
  <td width=100>Product Link</td>
  </tr>

    <?php
    //connect to database
    //$connect=mysqli_connect("localhost", "sqluser", "password", "web_app");
    $connect=mysqli_connect("sql5.freesqldatabase.com", "sql5727000", "JwNK88RJEq", "sql5727000");

    //check connection
    //if(!$connect){
    //    echo 'Connection error:' . mysqli_connect_error();
    //}

 //   if(!$connect){
 //       echo "Connection successful!";
 //   }
 
	if (isset($_POST['value'])) {
	
    //creating a query	
	if($_POST['value'] == 'Nintendo') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Nintendo'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Sony') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Sony'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Valve') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Valve'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} } else if($_POST['value'] == 'Asus') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Asus'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Corsair') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Corsair'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'HP') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'HP'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Acer') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Acer'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Alienware') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Alienware'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Maingear') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Maingear'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Apple') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Apple'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'Dell') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE brand = 'Dell'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'gaming') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE purpose = 'Gaming'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'office') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE purpose = 'Office'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'desktoppc') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE device_type = 'Desktop PC'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} }else if($_POST['value'] == 'handheld') { 
    // query to get all Nintendo records 
    $query = "SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers WHERE device_type = 'Handheld'"; 
//	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){

			print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
	} } else{
	$query = 'SELECT id,device,brand,purpose,device_type, cpu, gpu, memory, storage, price, product_link FROM computers ORDER BY brand';
	$result = mysqli_query($connect, $query);

    //echo mysqli_num_rows( $result );

    while( $row = mysqli_fetch_array($result)){
		//$record = mysqli_fetch_assoc($result)
        //echo '<pre>';
        //print_r($record);
        //echo '<pre>';

        //echo '<h2>'.$record['device'].'</h2>';
		
		print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['device'] . "</td>"; 
print "<td>" . $row['brand'] . "</td>"; 
print "<td>" . $row['purpose'] . "</td>";
print "<td>" . $row['device_type'] . "</td>";
print "<td>" . $row['cpu'] . "</td>";
print "<td>" . $row['gpu'] . "</td>";
print "<td>" . $row['memory'] . "</td>";
print "<td>" . $row['storage'] . "</td>";
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['product_link'] . "</td>"; 
print "</tr>"; 
		}
	}
}
//$sql = "SELECT id, brand FROM computers"; 
//$newResult = mysqli_query($connect, $sql); 
 
//if (mysqli_num_rows($result) > 0) { 
    // output data of each row 
//    while($row = mysqli_fetch_assoc($newResult)) { 
//        echo "id: " . $row["id"]. " - Brand: " . $row["brand"]. "<br>"; 
 //   } 
	

	
    ?>
	
	
	</table> 
</body>

</html>
