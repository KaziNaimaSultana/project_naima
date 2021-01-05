<h2>All Testimonial</h2>

 <table class="table table-nostyle">
 	<thead>
 		<tr>
 			<th>SL.</th>
 			<th>Name</th>
 			<th>E-mail</th>
 			<th>Examination</th>
 			<th>Year</th>
 			<th>Roll</th>
 			<th>Payment</th>
 			<th>Approve</th>
 			<th></th>
 		</tr>
 	</thead>
   
    <tbody>
  <?php 
  include 'libs/connection.php';
$conn = connect();
  $sql = "SELECT * FROM testimonial";
	$result = $conn->query($sql);
	$i=0; 	
	while ($results = $result->fetch_assoc()) {  
		$i++;
		$email = $results['email'];
    $approve = $results['approve'];

		

		echo '<tr>
        <td>'.$i.'</td>
        <td>'.$results['name'].'</td>
        <td>'.$results['email'].'</td>
        <td>'.$results['examination'].'</td>
        <td>'.$results['year'].'</td>
        <td>'.$results['roll'].'</td>
        <td>'.$results['payment'].'</td> ';   

      if($approve === '1'){
echo '<td><a class="btn btn-warning" href="testimonial.php?approve_email='.$results['email'].'" target="_blank">PDF</a></td>
      </tr>';
}else{ echo '<td><a class="btn btn-info" href="action.php?approve_email='.$email.'">Approve</a></td></tr>';}   
  }

  ?>  	
      
  </tbody>
</table>