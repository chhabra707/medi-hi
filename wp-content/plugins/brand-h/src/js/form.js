document.addEventListener('DOMContentLoaded', function(e) {
	let testimonialForm = document.getElementById('brandh-form-form');

	testimonialForm.addEventListener('submit', (e) => {
		e.preventDefault();

		// reset the form messages
		resetMessages();

		// collect all the data
		let data = {
			name: testimonialForm.querySelector('[name="name"]').value,
			email: testimonialForm.querySelector('[name="email"]').value,
			phone_code: testimonialForm.querySelector('[name="phone_code"]').value,
			phone: testimonialForm.querySelector('[name="phone"]').value,
			care: testimonialForm.querySelector('[name="care"]').value,
			medical_report: testimonialForm.querySelector('[name="medical_report"]').value,
			message: "message temp",
			message1: testimonialForm.querySelector('[name="message1"]').value,
			message2: testimonialForm.querySelector('[name="message2"]').value,
			nonce: testimonialForm.querySelector('[name="nonce"]').value
			
		} 
		
		// validate everything
		if (! data.name) {
			testimonialForm.querySelector('[data-error="invalidName"]').classList.add('show');
			return;
		}

		if (! validateEmail(data.email)) {
			testimonialForm.querySelector('[data-error="invalidEmail"]').classList.add('show');
			return;
		}

		if (!data.message) {
			testimonialForm.querySelector('[data-error="invalidMessage"]').classList.add('show');
			return;
		}
		if (!data.message1) {
			testimonialForm.querySelector('[data-error="invalidMessage1"]').classList.add('show');
			return;
		}
		if (!data.message2) {
			testimonialForm.querySelector('[data-error="invalidMessage2"]').classList.add('show');
			return;
		}


		if (!data.phone_code) {
			testimonialForm.querySelector('[data-error="invalidPhoneCode"]').classList.add('show');
			return;
		}

		if (!data.phone) {
			testimonialForm.querySelector('[data-error="invalidPhone"]').classList.add('show');
			return;
		}

		if (!data.care) {
			testimonialForm.querySelector('[data-error="invalidCare"]').classList.add('show');
			return;
		}

		if (!data.medical_report) {
			testimonialForm.querySelector('[data-error="invalidMedicalReport"]').classList.add('show');
			return;
		}

		// ajax http post request
		let url = testimonialForm.dataset.url;
		let params = new URLSearchParams(new FormData(testimonialForm));

		testimonialForm.querySelector('.js-form-submission').classList.add('show');

		fetch(url, {
			method: "POST",
			body: params
		}).then(res => res.json())
			.catch(error => {
				resetMessages();
				testimonialForm.querySelector('.js-form-error').classList.add('show');
			})
			.then(response => {
				resetMessages();
				
				if (response === 0 || response.status === 'error') {
					testimonialForm.querySelector('.js-form-error').classList.add('show');
					return;
				}

				testimonialForm.querySelector('.js-form-success').classList.add('show');
				testimonialForm.reset();
			})
	});
});
  
function resetMessages() {
	document.querySelectorAll('.field-msg').forEach(f => f.classList.remove('show'));
}

function validateEmail(email) {
	let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}