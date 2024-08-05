<?php

//include header file
include('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						
						<optgroup title="Kolhapur" label="&raquo; Kolhapur"></optgroup>
						<option value="Panhala">Panhala</option>
						<option value="Kodoli">Kodoli</option>
						<option value="Kagal">Kagal</option>
						<option value="Radhanagari">Radhanagari</option>
						<option value="Shahuwadi">Shahuwadi</option>
						<option value="Gadhinglaj">Gadhinglaj</option>
						<option value="Chandgad">Chandgad</option>
						<option value="Ajra">Ajra</option>
						<option value="Ichalkaranji">Ichalkaranji</option>
						<option value="Gargoti">Gargoti</option>Peth Vadgaon
						<option value="Peth Vadgaon">Peth Vadgaon</option>

						<optgroup title="Sangli" label="&raquo; Sangli"></optgroup>
						<option value="Shirala">Shirala</option>
						<option value="Palus">Palus</option>
						<option value="Tasgaon">Tasgaon</option>
						<option value="Islampur">Islampur </option>
						<option value="Manerajuri">Manerajuri</option>
						<option value="Mangale">Mangale</option>
						
						<optgroup title="Satara" label="&raquo; Satara"></optgroup>
						<option value="Karad">Karad</option>
						<option value="Koregaon">Koregaon</option>
						<option value="Patan">Patan</option>
						<option value="Phaltan">Phaltan</option>
						<option value="Jaoli">Jaoli</option>
						<option value="Khatav">Khatav</option>

						<optgroup title="Pune" label="&raquo; Pune"></optgroup>
						<option value="Hinjawadi">Hinjawadi</option>
						<option value="Wakad">Wakad</option>
						<option value="Nigdi">Nigdi</option>
						<option value="Pimpri">Pimpri</option>
						<option value="Chinchwad">Chinchwad</option>
						<option value="Dehu">Dehu</option>
						<option value="Saswad ">Saswad </option>
						<option value="Warje">Warje</option>
						<option value="Chakan">Chakan</option>
						<option value="Hadapsar">Hadapsar</option>
						<option value="Katraj">Katraj</option>
						<option value="Vishrantwadi">Vishrantwadi</option>
						<option value="Tathawade">Tathawade </option>
						<option value="Dhankawadi">Dhankawadi </option>
						<option value="Alandi">Alandi</option>
						<option value="Aundh">Aundh </option>
						<option value="Talegaon">Talegaon </option>
						<option value="Kalewadi">Kalewadi </option>

						<optgroup title="Mumbai" label="&raquo; Mumbai"></optgroup>
						<option value="Borivali">Borivali</option>
						<option value="Goregaon">Goregaon </option>
						<option value="	Bandra">Bandra</option>
						<option value="Juhu">Juhu</option>
						<option value="Vileparle">Vileparle</option>
						<option value="Chembur"> Chembur</option>
						<option value="Kanheri">Kanheri</option>
						
					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.

				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>