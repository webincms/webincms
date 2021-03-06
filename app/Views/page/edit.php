
<?= $this->extend('index') ?>

<?= $this->section('content') ?>

	<div class="page__toolbar">
		<div class="page__toolbar--left">
			<h1 class="mods--title"><?= $title; ?></h1>
			<div class="mods--subtitle"><?= $subtitle; ?></div>
		</div>
		<div class="">
			<a onclick="return confirm('Are you want to cancel this form?');" class="btn btn-sm btn-secondary" onclick="$('#publish').val(0);$('#addpage').submit();">Draft</a>
			<a class="btn btn-sm btn-primary" onclick="$('#addpage').submit();">Save</a>
		</div>
	</div>
	

	<div class="page__content mt-10">

		<?php if(session()->getFlashdata('info')) { ?>
			<div class="alert alert-warning">
			<?= session()->getFlashdata('info'); ?>
			</div>
		<?php } ?>
		
		<form id="addpage" name="addpage" action="" method="post" class="form-group top-label">
		<input type="hidden" name="id" value="<?= $page['content_id']; ?>" />
		<input type="hidden" name="publish" id="publish" value="1" />
		<div class="d-flex justify-between">
			<div class="col-8-12">
			<div class="card mb-20">
				<div class="card--body">
					<div class="field-group">
						<label class="">Title</label>
						<input type="text" class="input-text input-block" name="title" value="<?= $page['content_title']; ?>" />
					</div>
					<div class="field-group">
						<label class="">Body</label>
						<textarea id="summernote" class="input-text editor" name="body"><?= $page['content_body']; ?></textarea>
					</div>
				</div>
			</div>

			<div class="card mb-30">
				<div class="card--body">
					<div class="field-group">
						<label class="">Meta Title</label>
						<input type="text" class="input-text input-block" name="meta_title" value="<?= $page['content_meta_title']; ?>" />
					</div>
					<div class="field-group">
						<label class="">Meta Description</label>
						<textarea class="input-text input-block" name="meta_desc"><?= $page['content_meta_desc']; ?></textarea>
					</div>
				</div>
			</div>
			</div>
			<div class="col-4-12 pl-20">
				<div class="card mb-20">
					<div class="card--header">
						Language
					</div>
					<div class="card--body">
						<select class="input-text" name="language">
							<option value="">All Language</option>
							<option value="id" <?= $page['content_lang'] == 'id'?'selected':''; ?>>Indonesia</option>
							<option value="en" <?= $page['content_lang'] == 'en'?'selected':''; ?>>English</option>
						</select>
					</div>
				</div>
				<div class="card mb-20">
					<div class="card--header">
						Featured Image
					</div>
					<div class="card--body align-center">
						<a href="#" class="btn btn-sm btn-info">Select Image</a>
					</div>
				</div>
				<div class="card mb-20">
					<div class="card--header">
						Template
					</div>
					<div class="card--body">
						<select class="input-text" name="template">
							<option value="page">Default Template</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>

<?= $this->endSection() ?>

<?= $this->section('head') ?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
        placeholder: 'Write your page here',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
});
</script>
<?= $this->endSection() ?>