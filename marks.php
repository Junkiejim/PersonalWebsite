<!DOCTYPE html>
<html>
<title>Math 2C03</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green"
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
>
</style>
<body class="w3-light-grey">


<!-- Page Container -->
<header class="w3-container w3-green w3-center w3-margin-bottom">
<div class="w3-container w3-padding-16 w3-green">
<h2 style="text-align:left;"> Math 2C03: Introduction to Differential Equations<span style="float:right;">Summer 2018</span></h2>
</div>
</header>
<div class="w3-content" style="max-width:1400px; min-height:100%">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
  <?php
		  $student_number =$_POST["student_number"];
			$marks = array_map('str_getcsv', file('marks.csv'));
  ?>
	<!-- Content -->
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container w3-padding-16">
		<h2 class="w3-opacity">Marks <span style="float:right"><a href="2C03.html"><i class="fa fa-home fa-fw w3-margin-right w3-text-green w3-xxlarge"></i></a><span></h2>
		<form style="w3-padding-16" type="text" name="StudNum" action="marks.php" method="post">
		<div class="w3-row w3-section">
		<div class="w3-col" style="width:50px"> <button class="w3-button" type="submit"><i class="w3-large fa fa-search"></i></button></div>
		<div class="w3-rest">
         <input class="w3-input" style="width:30%" type="text" placeholder="Last 5 digits of Student Number" name="student_number" >
		  </div>
		 </div>
		</form>
		<table class="w3-table w3-striped w3-large">
		<tr> 
		  <th>Course Work</th>
		  <th>You</th>
		  <th>Mean</th>
		  <th>Total</th>
		</tr>
		<tr>
		  <td>Assignment 1</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[1]);
			}}
			?></td>
			<td>20.9</td>
			<td>25</td>
		</tr>
		  <td>Assignment 2</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[2]);
			}}
			?></td>
			<td>29.8</td>
			<td>37</td>
		</tr>
		  <td>Assignment 3</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[3]);
			}}
			?></td>
			<td>29.9</td>
			<td>35</td>
		</tr>
		  <td>Assignment 4</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[4]);
			}}
			?></td>
			<td></td>
			<td></td>
		</tr>
		  <td>Midterm 1</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[5]);
			}}
			?></td>
			<td>21.3</td>
			<td>30</td>
		</tr>
		  <td>Midterm 2</td>
		  <td><?php
			foreach($marks as $line){
			if($line[0] == $_POST["student_number"]){
			print_r($line[6]);
			}}
			?></td>
			<td>20.1</td>
			<td>26</td>
		</tr>
		</table>

		</div>
      </div><br>

    <!-- End Content -->
</div>
</div>
<footer class="w3-container w3-green w3-center w3-margin-top">
<div class="w3-cell-row">
<div class="w3-cell"><p style="text-align:left;">
	<a href="http://www.mcmaster.ca"> McMaster University</a><br><a href="http://ms.mcmaster.ca"> Mathematics and Statistics</a></p>
    </div>
<div class="w3-cell w3-cell-bottom">
<p style="text-align:center;">Powered by <a href="https://www.w3schools.com/w3css/default.asp">w3.css</a></p>
</div>
<div class="w3-cell"><p style="text-align:right;">
 Hamilton Hall 1280 Main Street West <br> Hamilton, Ontario L8P 3X7
	</p>
 </div>
</div>
</footer>

</body>
</html>