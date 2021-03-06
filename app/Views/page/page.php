
<?= $this->extend('index') ?>

<?= $this->section('content') ?>

	<div class="page__toolbar">
		<div>
			
		</div>
		<div>
			<a href="<?= base_url('admin/page/add'); ?>" class="btn btn-sm btn-primary">Add Page</a>
		</div>
	</div>

	<div class="page__header">
		<h1 class="page--title"><?= $title; ?></h1>
		<div class="page--subtitle"><?= $subtitle; ?></div>
	</div>
	<div class="page__content mt-10">
	<?php if(session()->getFlashdata('info')) { ?>
		<div class="alert alert-warning">
		<?= session()->getFlashdata('info'); ?>
		</div>
	<?php } ?>
	<table class="card-table">
		<tbody>
			<?php foreach($pages as $page) { ?>
			<tr>
				<td width="40"><img src="<?= base_url('admin/assets/img/pexels-pixabay-220453.jpg'); ?>" class="avatar avatar-sm" /></td>
				<td><span class="label label-secondary">Page</span> <?= $page['content_title']; ?></td>
				<td width="10">
					<div class="dropdown">
						<a href="#" class="dropdown-link action-link"><i class='bx bx-dots-vertical-rounded'></i></a>
						<div class="dropdown-menu right">
							<a class="dropdown-item" href="<?= base_url('admin/page/edit/'.$page['content_id']); ?>">Edit</a>
							<a class="dropdown-item" href="<?= base_url('admin/page/delete/'.$page['content_id']); ?>" onclick="return confirm('Are you want to delete this data?');">Hapus</a>
						</div>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>

	
<?= $this->endSection() ?>