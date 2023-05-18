<body>
	<main>
		<?php include("header.php") ?>

		<div class="container py-2">
			<div class="row">
				<?php if ($msg = $this->session->flashdata('response')): ?>
					<div class="col-md-12">
						<div class="alert alert-dismissible alert-success">
							<?php echo $msg; ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<?php echo anchor("home/create", 'Adcionar Usuário', ['class' => 'btn btn-primary']); ?>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Telefone</th>
							<th scope="col">Endereço</th>
							<th scope="col">Cidade</th>
							<th scope="col">País</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php if (count($records)): ?>
							<?php foreach ($records as $record) { ?>
								<tr>
									<td>
										<?php echo $record->id; ?>
									</td>
									<td>
										<?php echo $record->nome; ?>
									</td>
									<td>
										<?php echo $record->telefone; ?>
									</td>
									<td>
										<?php echo $record->endereco; ?>
									</td>
									<td>
										<?php echo $record->cidade; ?>
									</td>
									<td>
										<?php echo $record->pais; ?>
									</td>
									<td class="d-grid gap-2 d-md-flex">
										<?php echo anchor("home/edit/{$record->id}", 'Editar', ['class' => 'btn btn-sm btn-outline-primary']); ?>
										<?php echo anchor("home/delete/{$record->id}", 'Deletar', ['class' => 'btn btn-sm btn-outline-danger']); ?>
									</td>
								</tr>
							<?php }
							; ?>
						<?php else: ?>
							<tr>
								<td colspan="7" class="text-center">Nenhum registro encontrado.</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php include("footer.php") ?>
	</main>
</body>
