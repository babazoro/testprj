<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>main</title>
</head>
<body>

<h1>メイン画面</h1>
<button onclick="color();">h１タグの色を変更</button><br>
<p>jQuery</p>

<button onclick="testAjax();">sample</button><br>


<?= $this->Form->create('search',['id'=>'search']);?>
名前:<?= $this->Form->text('name');?>
<?= $this->Form->button('検索'); ?>
<!-- <?= $this->Form->submit('検索'); ?> -->
<?= $this->Form->end(); ?>


<a href="/testprj/login">ログアウト</a>

<script type="text/javascript" src="js/jQuery-1.7.min.js"></script>
<script type="text/javascript" src="js/test.js"></script>

</body>
</html>