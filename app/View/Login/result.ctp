<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>result</title>
</head>
<body>
<!-- <p>
フォームから送られた値<br>
ID:<?= $id;?><br>
PASS:<?= $pass;?><br>
</p> -->
<?php foreach($MUser as $value):?>
<p><?php echo $value['MUser']['LOGIN_ID']?></p>
<?php endforeach;?>

<a href="/testprj/main">Mainへ</a><br>
<a href="/testprj/login">ログアウト</a><br>
</body>
</html>