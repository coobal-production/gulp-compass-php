
<?php
	$slug = 'slug';// includeなどの条件分岐用
	$title = 'タイトル';
	$description = 'ディスクリプション';
	$keywords = 'キーワード1,キーワード2,キーワード3';
	$image_index = 0;// 0:index 1:noimageindex
	$search_index = 0;// 0:index 1:noindex,nofolow
	include_once(dirname(__FILE__) . "/assets/include/site_config.php");
	include_once(dirname(__FILE__) . "/assets/include/_html_header.php");
?>
<body>

<?php
	include_once(dirname(__FILE__) . "/assets/include/_header.php");
	include_once(dirname(__FILE__) . "/assets/include/_gnav.php");
?>


<div id="ct_wp">

	<div id="main">
		<main role="main">

			…

		</main>
	</div><!-- /#main -->

<?php
	include_once(dirname(__FILE__) . "/assets/include/_side.php");
?>

</div><!-- /#ct_wp -->

<?php
	include_once(dirname(__FILE__) . "/assets/include/_footer.php");
	include_once(dirname(__FILE__) . "/assets/include/_end_of_body.php");
?>
</body>
</html>
