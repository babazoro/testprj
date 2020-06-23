<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>login</title>
</head>
<body>
<h1>ユーザーログイン</h1>


<?= $this->Form->create('login',array(
	'type' => 'post',
	'url' => 'result'
));?>

ID:<?= $this->Form->text('ID');?>
PASS:<?= $this->Form->password('PASS');?>
<?= $this->Form->submit('ログイン'); ?>
<?= $this->Form->end(); ?>

<!-- <form action= "login/result" method="post">
  ID:<input type="text" name="id"><br>
  PASS:<input type="password" name="password">
  <input type="submit" value="ログイン"><br>
</form> -->
</body>
</html>

