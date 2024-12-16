window.onload = function() {
	const successMessage = document.getElementById('successMessage');
	if (successMessage) {
		setTimeout(function() {
			successMessage.style.display = 'none';
		}, 5000);
	}
}

const form = document.getElementById('userForm');
const emailInput = document.getElementById('email');
const emailError = document.getElementById('emailError');

form.addEventListener('submit', function(event) {
	emailError.textContent = '';
	const emailValue = emailInput.value;

	if (!emailValue) {
		event.preventDefault();
		emailError.textContent = 'Email є обов’язковим.';
	} else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
		event.preventDefault();
		emailError.textContent = 'Введіть дійсний email.';
	}
});