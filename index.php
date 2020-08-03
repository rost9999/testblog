<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-RU" class="no-touch"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Тестовий Блог</title>
<meta name="description" content="Тестовий Блог">
<link rel="stylesheet" href="./index_files/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="./index_files/codecolorer.css" type="text/css" media="screen">

<?php
include_once 'app/database.php';
$sql = "SELECT `id`,`title`,`view` FROM `post` ORDER BY `view` DESC LIMIT 10";
$result = mysqli_query($db, $sql);
$top = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<div id="page">
<div id="header">
    <div id="header_title">
        <h1><a href="/" >Тестовий Блог</a></h1>
    </div>
    
    <div class="clear"></div>
</div>

<div id="body">
<div id="body_top">

<?php
if($_GET['post']){
	include_once 'app/post.php';
} else {
	include_once 'app/posts.php';
}
?>

    <div id="body_right">
    	<div id="body_right_content">
            <div id="sidebars">
                	<div id="sidebar" class="sidebars">
		<ul>
		<li id="text-14" class="widget widget_text"><h2 class="widgettitle">Популярні Пости</h2>			
		<div class="textwidget"><ul>

<?php foreach($top as $t): ?>
<li><a href="?post=<?=$t['id']?>"><?=$t['id']?>.<?=$t['title']?></a>, <?=$t['view']?> переглядів</li>
<?php endforeach; ?>

</ul></div>
		</li>                </ul>
<div class="clear"></div>
			</div>
            </div>
            
        </div>
        <div id="body_right_content_end"></div>
    </div>
    <div id="body_right_end"></div>
<!-- sidebar end -->

</div>
</div>

<!-- footer begin -->

<div id="footer">
</div>
	<div id="footer_text">

        <div style="float: left;">

        </div>
        <div style="float: right;">

        </div>
        <div style="clear: both;"></div>
    </div>

<!-- footer end -->
</div>
</body></html>