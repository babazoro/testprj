<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>login</title>
</head>
<body>
<h1>ユーザーログイン</h1>

<!-- フォームヘルパーでフォームを作成 -->
<?= $this->Form->create('login',array(
	'type' => 'post',
	'url' => 'login'
));?>
ID:<?= $this->Form->text('ID');?>
	<?php if (isset($idmsg)) { ?>
		<?php foreach($idmsg as $value): ?>
		      <p><?= $value; ?></p>
		<?php endforeach; ?>
	<?php } ?>
PASS:<?= $this->Form->password('PASS');?>
	<?php if (isset($passmsg)) { ?>
		<?php foreach($passmsg as $value): ?>
		      <p><?= $value; ?></p>
		<?php endforeach; ?>
	<?php } ?>
<?= $this->Form->submit('ログイン'); ?>
<?= $this->Form->end(); ?>

<!-- <form action= "login/result" method="post">
  ID:<input type="text" name="id"><br>
  PASS:<input type="password" name="password">
  <input type="submit" value="ログイン"><br>
</form> -->

<script type="text/javascript" src="js/jQuery-1.7.min.js"></script>
</body>
</html>

