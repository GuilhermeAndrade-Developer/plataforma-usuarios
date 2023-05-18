<body>
	<main>
		<?php include("header.php") ?>
		<div class="container">
			<div class="py-5">
				<div class="col-lg-12 card">
					<div class="card-body">
						<h4 class="mb-3">Cadastro de Usuário</h4>
						<?php echo form_open("home/save", ['class' => 'needs-validation', 'novalidate' => 'novalidate']); ?>
						<div class="row g-3">
							<div class="col-sm-6">
								<label for="firstName" class="form-label">Nome Completo</label>
								<?php echo form_input(['name' => 'nome', 'class' => 'form-control', 'id' => 'firstName', 'value'=>set_value('nome'), 'placeholder' => '', 'required' => 'required']); ?>
								<div class="invalid-feedback">
									Nome é obrigatório.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="telefone" class="form-label">Telefone</label>
								<?php echo form_input(['name' => 'telefone', 'class' => 'form-control', 'id' => 'telefone', 'value'=>set_value('telefone'), 'placeholder' => '(00)0000-0000', 'required' => 'required']); ?>
								<div class="invalid-feedback">
									Telefone é obrigatório.
								</div>
							</div>

							<div class="col-12">
								<label for="endereco" class="form-label">Endereço</label>
								<?php echo form_input(['name' => 'endereco', 'class' => 'form-control', 'id' => 'endereco', 'value'=>set_value('endereco'), 'placeholder' => 'Rua A, 123', 'required' => 'required']); ?>
								<div class="invalid-feedback">
									Endereço é obrigatório.
								</div>
							</div>

							<div class="col-md-6">
								<label for="cidade" class="form-label">Cidade</label>
								<?php echo form_input(['name' => 'cidade', 'class' => 'form-control', 'id' => 'cidade', 'value'=>set_value('cidade'), 'placeholder' => 'São Paulo', 'required' => 'required']); ?>
								<div class="invalid-feedback">
									Cidade é obrigatório.
								</div>
							</div>

							<div class="col-md-6">
								<label for="pais" class="form-label">País</label>
								<?php echo form_input(['name' => 'pais', 'class' => 'form-control', 'id' => 'pais', 'value'=>set_value('pais'), 'placeholder' => 'Brasil', 'required' => 'required']); ?>
								<div class="invalid-feedback">
									País é obrigatório.
								</div>
							</div>
						</div>

						<hr class="my-4">

						<div class="d-grid gap-2 d-md-flex justify-content-md-end">
							<?php echo form_submit(['value' => 'Cadastrar', 'class' => 'btn btn-primary']); ?>
							<?php echo form_reset(['value' => 'Cancelar', 'class' => 'btn btn-danger']); ?>
						</div>
						<?php form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php") ?>
	</main>
	<script>
		(function () {
			'use strict'
			var forms = document.querySelectorAll('.needs-validation')

			Array.prototype.slice.call(forms)
				.forEach(function (form) {
					form.addEventListener('submit', function (event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
</body>
