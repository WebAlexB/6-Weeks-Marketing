<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тестовое задание от 6 Weeks Marketing</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center">Форма</h4>
				</div>
				<div class="card-body">
					<?php if (isset($_GET['message']) && $_GET['message'] == 'success'): ?>
						<div class="alert alert-success" role="alert" id="successMessage">
							Форма успішно надіслана!
						</div>
					<?php endif; ?>

					<form id="userForm" method="POST" action="send.php">
						<div class="mb-3">
							<label for="name" class="form-label">Ім’я</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Введіть ваше ім’я">
						</div>

						<div class="mb-3">
							<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Введіть ваш email" required>
							<div class="error text-danger" id="emailError"></div>
						</div>

						<div class="mb-3">
							<label for="message" class="form-label">Текстове поле</label>
							<textarea id="message" name="message" class="form-control" rows="4" placeholder="Напишіть повідомлення"></textarea>
						</div>

						<button type="submit" class="btn btn-primary w-100">Відправити</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
