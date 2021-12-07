		<section class="registration-form">
			<div class="container">
				<form>
					<!-- Contact details -->
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="email" class="form-control" id="email" aria-label="Email address" maxlength="255" required>
					</div>

					<!-- Name -->
					<div class="mb-3">
						<label for="firstName" class="form-label">First name</label>
						<input type="text" class="form-control" id="firstName" aria-label="First name" maxlength="255" required>
					</div>
					<div class="mb-3">
						<label for="lastName" class="form-label">Last name</label>
						<input type="text" class="form-control" id="lastName" aria-label="Last name" maxlength="255" required>
					</div>

					<!-- Profile -->
					<div class="mb-3">
						<label for="dob" class="form-label">Date of Birth</label>
						<input type="date" class="form-control" id="dob" aria-label="Date of birth" required>
					</div>

					<div class = "mb-3">
						<label for="genderRadio" class="form-label">Gender</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="genderRadio" id="genderRadioF" aria-label="Female" required>
							<label class="form-check-label" for="genderRadioF">Female</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="genderRadio" id="genderRadioM" aria-label="Male" required>
							<label class="form-check-label" for="genderRadioM">Male</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="genderRadio" id="genderRadioN" aria-label="Non-binary" required>
							<label class="form-check-label" for="genderRadioN">Non-binary</label>
						</div>
					</div>

					<div class="mb-3">
						<label for="club" class="form-label">Club</label>
						<input type="text" class="form-control" id="club" placeholder="Optional" aria-label="Club (optional)" maxlength="255">
					</div>

					<!-- Emergency information -->
					<div class="mb-3">
						<label for="medicalConditions">Medical conditions</label>
						<input type="text" class="form-control" id="medicalConditions" aria-describedby="medicalConditionsHelp" aria-label="Female" maxlength="255">
						<div id="medicalConditionsHelp" class="form-text">Anything that you think might impact your participation</div>
					</div>

					<div class="mb-3">
						<label for="emergencyContact">Emergency contact</label>
						<input type="text" class="form-control" id="emergencyContact" aria-describedby="emergencyContactHelp" maxlength="255" required>
						<div id="emergencyContactHelp" class="form-text">Who we should contact in an emergency</div>
					</div>

					<div class="mb-3">
						<label for="emergencyContactNumber">Emergency contact number</label>
						<input type="text" class="form-control" id="emergencyContactNumber" aria-describedby="emergencyContactNumberHelp" maxlength="40" required>
						<div id="emergencyContactNumberHelp" class="form-text">Number for emergency contact</div>
					</div>

					<!-- Submit components -->
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="emailSubscription" aria-label="Notify me about future Leith Harbour Free events">
						<label class="form-check-label" for="emailSubscription">Notify me about future LHF events</label>
					</div>
					
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="termsAndConditions" aria-label="I have red and accepted the terms and conditions" required>
						<label class="form-check-label" for="termsAndConditions">I have read and accepted the <a href="#">terms and conditions</a></label>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>	

				</form>            
			</div>
		</section>
