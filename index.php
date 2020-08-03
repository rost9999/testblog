<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0233)file:///D:/hexlet/php/%D0%B1%D0%BB%D0%BE%D0%B3/%D0%9D%D0%BE%D0%B2%D0%B0%D1%8F%20%D0%BF%D0%B0%D0%BF%D0%BA%D0%B0/%D0%97%D0%B0%D0%BF%D0%B8%D1%81%D0%BA%D0%B8%20%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%81%D1%82%D0%B0.html -->
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

<!-- header end -->

<div id="body">
<div id="body_top">
<?php
if($_GET['post']){
	include_once 'app/post.php';
} else {
	include_once 'app/posts.php';
}
?>



<!-- sidebar begin -->
    <div id="body_right">
    	<div id="body_right_content">
            <div id="sidebars">
                	<div id="sidebar" class="sidebars">
		<ul>
		<li id="text-14" class="widget widget_text"><h2 class="widgettitle">Популярні Пости</h2>			<div class="textwidget"><ul>

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