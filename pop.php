<html>
	<head>
		<meta charset=utf8></meta>
		<script src="jquery-1.8.2.min.js"></script>
		<script src="jquery.tipTip.js"></script>
		<script src="jquery.tipTip.minified.js"></script>
		<link href="tipTip.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
	<script>

	$( function(){
		// ホバーで表示させたい場合
		//$( '.tip' ).tipTip({defaultPosition: "right"});
		// クリックで表示させたい場合
		$( '.tip' ).tipTip({ activation: 'click' });
	});
	</script>
	<a href="" class="tip" title="名前には特に深い意味は無いよ">アルパカの具</a>」

	<table>
		<tr>
			<td class="tip" title="ポップアップ">てすと１</td>
			<td class="tip" title="コメント">テスト２</td>
		</tr>
	</body>
</html>