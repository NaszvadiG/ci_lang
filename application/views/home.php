<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style>
		.color_bg{
			color:green;
		}
		.color_en{
			color:red;
		}
	</style>
</head>
<body>
	<?= anchor($this->lang->switch_uri('bg'), 'Български'); ?> |
	<?= anchor($this->lang->switch_uri('en'), 'English'); ?> <br/>
		
	<p><?= lang('work') ?></p>
	<p class="color_<?= $lid ?>">current language is: <?= $lid; ?></p>
	<div>
	<h1><?php echo $title; ?></h1>
	<p><?php echo $content; ?></p>
	</div>
</body>
</html>