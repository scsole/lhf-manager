		<section class="registration-form">
			<div class="container">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<!-- Name -->
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="first_name">First name</label>
					<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" maxlength="255" required>
					</div>
					<div class="form-group col-md-6">
					<label for="last_name">Last name</label>
					<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name" maxlength="255" required>
					</div>
				</div>

				<!-- Profile -->
				<div class="form-row">
					<div class="form-group col-md-3">
					<label for="dob">Date of Birth</label>
					<input type="date" class="form-control" name="dob" id="dob" required>
					</div>

					<div class="form-group col-md-9">
					<label for="club">Club</label>
					<input type="text" class="form-control" name="club" id="club" placeholder="Optional" maxlength="255">
					</div>
				</div>

				<div class="form-group">
					<legend class="col-form-label pt-0">Gender</legend>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
					<label class="form-check-label" for="female">Female</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" id="male" value="male">
					<label class="form-check-label" for="male">Male</label>
					</div>
				</div>

				<!-- Contact information -->
				<div class="form-group">
					<label for="email_address">Email address</label>
					<input type="email" pattern=".+@.+\..+" class="form-control" name="email_address" id="email_address" aria-describedby="emailHelp" placeholder="Your email address" maxlength="254" required>
					<small id="emailHelp" class="form-text text-muted">So we can let you know when the next event is</small>
				</div>

				<!-- Emergency information -->
				<div class="form-group">
					<label for="medical_conditions">Medical Conditions</label>
					<input type="text" class="form-control" name="medical_conditions" id="medical_conditions" aria-describedby="medicalConditionsHelp" placeholder="Anything that you think might impact your participation" maxlength="255">
					<small id="medicalConditionsHelp" class="form-text text-muted">This is only used in case of an emergency</small>
				</div>

				<div class="form-group">
					<label for="emergency_contact_name">Emergency Contact</label>
					<input type="text" class="form-control" name="emergency_contact_name" id="emergency_contact_name" placeholder="Who we should contact in an emergency" maxlength="255" required>
				</div>

				<div class="form-group">
					<label for="emergency_contact_number">Emergency Contact Number</label>
					<input type="text" class="form-control" name="emergency_contact_number" id="emergency_contact_number" placeholder="Number(s) for emergency contact" maxlength="40" required>
				</div>

				<!-- Submit components -->
				<div class="form-group">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" name="accepted_terms" id="accepted_terms" required>
					<label class="form-check-label" for="accepted_terms">I have read and accepted the <a href="#">terms and conditions</a></label>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
				</form>            
			</div>
		</section>
