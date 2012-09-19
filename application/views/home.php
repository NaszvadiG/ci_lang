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
	<h1><?php echo $name->title; ?></h1>
	<p><?php echo $name->content; ?></p>
	<p><?php echo $page_id; ?></p>
	<br/>
	<p><?php echo $name->url_title; ?></p>
	</div>
</body>
</html>