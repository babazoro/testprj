<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>main</title>
</head>
<body>
<script type="text/javascript" src="js/jQuery-1.7.min.js"></script>
<script type="text/javascript" src="js/test.js"></script>
<h1>メイン画面</h1>

<p>jQuery</p>

<?= $this->Form->create('search',['id'=>'search']);?>
名前:<?= $this->Form->text('name');?>
<!-- <?= $this->Form->button('検索',['id' => 'btn']); ?> -->
<!-- <?= $this->Form->submit('検索'); ?> -->
<?= $this->Form->end(); ?>
<button>検索</button>

<table id = 'table'>
	<tr>
		<th >ID(SYAIN_ID)</th>
		<th>名前(NAME)</th>
		<th>性別(SEIBETSU)</th>
		<th>誕生日(BIRTHDAY)</th>
	</tr>
</table>

<a href="/testprj/login">ログアウト</a>
</body>
</html>