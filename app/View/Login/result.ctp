<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>result</title>
</head>
<body>
<p>
フォームから送られた値<br>
ID:<?= $id;?><br>
PASS:<?= $pass;?><br>
</p>

<!-- <?= $msg;?><br>
<?php foreach ($msg as $key => $value): ?><br>
	<?= $key ?>
	<?= $value ?><br>
<?php endforeach; ?> -->
<a href="/testprj/main">Mainへ</a>
<a href="/testprj/login">ログアウト</a>
</body>
</html>