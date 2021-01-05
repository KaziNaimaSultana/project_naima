<?php
include 'mpdf/mpdf.php';
$mpdf= new mPDF();
include 'libs/connection.php';
$conn = connect();



if(isset($_GET['approve_email'])){
  $email = $_GET['approve_email'];
   $sql = "SELECT * FROM testimonial WHERE email = '$email'";
  $result = $conn->query($sql);  
  while ($results = $result->fetch_assoc()) {  
 
    $email = $results['email'];
    $name = $results['name'];
    $father = $results['father'];
    $mother = $results['mother'];
    $address = $results['address'];
    $mobile = $results['mobile'];
    $examination = $results['examination'];
    $roll = $results['roll'];
    $year = $results['year'];
    $gpa = $results['gpa'];
    $payment = $results['payment'];
    $approve = $results['approve'];

if($approve==1){
$html = '<html>
<head>
<style>
@page {  size: auto;  odd-header-name: html_myHeader1;  even-header-name: html_myHeader2;  odd-footer-name: html_myFooter1;  even-footer-name: html_myFooter2;}
@page noheader {    odd-header-name: _blank;    even-header-name: _blank;    odd-footer-name: _blank;    even-footer-name: _blank;}
</style>
</head>
<body>
<htmlpageheader name="myHeader1" style="display:none">
<div style="text-align: center; font-weight: bold; ">
<h1>UNIVERSITY OF DHAKA</h1>
<h2>INSTITUTE OF INFORMATION TECHNOLOGY</h2>
<img src="image/logo.jpg" width="80px">
<p></p><p></p>
<h1>TESTIMONIAL</h1>
<p></p><p></p>
<p style="text-align:justify">This is certified that '.$name.', son/daughter of '.$father.', '.$address.' was a student of this institute. He/She has passed '.$examination.' in '.$in.'. In my knowledge he/she waas attentive in the class and his/her moral character is excellent.</p>
<p></p><p></p>
<p style="text-align:left">I wish him/her all success in future life.</p>
<p></p><p></p><p></p><p></p><p></p>
<p style="text-align:left">Chariman</p>
<p style="text-align:left">Date:..................</p>


</div>
</body>
</html>';
}}}else{
  $html = '<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
  <h1>No data found!</h1>
  </body>
  </html>';
}

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;


?>