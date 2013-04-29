<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<title><?php echo TITLE ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('bootstrap-responsive.css'); ?>
	<?php echo Asset::css('common.css'); ?>
</head>
<body>
	<div class="container-fluid">
	
	<!-- Deleted relative design part to make coding easier -->
	<!-- TODO: copy back the HTML part-->
	
		<div class="row-fluid">
			<div class="span12" style="margin:20px 0px 20px;">
				<br />
				<h5>はじめに</h5>
				このWebサービスはみんなで今日どこのゲームセンターに行くかを登録して
				「今日は誰かいるかな？」とか「あいつ今日来るかな？」といった情報をサーチして快適にゲーセンに行くためのツールです。<br />
				サービス利用にはTwitterアカウント及びTwitter認証が必要です。<br />
				ご了承頂ける場合は下記ボタンよりTwitter認証へお進みください。<br />	
				<br />
				<h4>動作環境</h4>
				PC（Firefox、Chrome、Safari)、スマートフォンです。<br />
				携帯（ガラケー）は動作確認してません！あとIEで見ると酷いことになりますのでご了承ください！
				
				<?php echo Form::open('login/form');  ?>
				<div class="actions m-top">
				<?php echo Form::submit('submit', 'Twitter認証へ'); ?>
				</div>
				<?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token()); ?>
				<?php echo Form::close();  ?>
				
				
				<div class="m-top30">何かありましたら<a href="https://twitter.com/en_turuou" target="_blank">作成者：エン@en_turuou</a>までご連絡ください。<br />
					
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
