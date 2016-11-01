<?php
	$message = 'お探しのキーワードに関する記事は見つかりませんでした。';
	if( is_404() ) { $message = 'アクセスいただいたページは存在しませんでした。'; }
	if( is_post_type_archive() || is_archive() ) { $message = 'アクセスいただいたカテゴリに記事がまだありませんでした。'; }
?>
<section class="p-error">
	<h1 class="p-error-title">お探しのページは見つかりませんでした。</h1>
	<p>申し訳ございませんが、<?php echo $message; ?><br>
	恐れ入りますが、下記をお試しください。</p>
	<ul>
		<li>キーワードをご確認の上、再度検索を試す。</li>
		<li><a href="/">トップページへ戻る</a></li>
	</ul>
</section>
