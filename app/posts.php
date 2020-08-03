<?php

if(!$_GET['page']){
	$_GET['page'] = 1;
}

$sql = "SELECT * FROM `post` LIMIT 5 OFFSET ".($_GET['page']-1)*5;
$result = mysqli_query($db, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql = "SELECT COUNT(*) FROM `post`";
$result = mysqli_query($db, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];
$pages = (ceil($count/5));
?>


<div id="body_left">
<div id="body_left_content">
<div id="content" class="narrowcolumn">

<?php foreach($posts as $post): ?>
		        <div class="post" id="post-<?=$post['id']?>">
                <div class="post-top">
                    <div class="post-title">
                        <div class="left">
                          <h2><a href="/?post=<?=$post['id']?>"><?=$post['id'].$post['title']?></a></h2>
                          <div style="float: left;">
                          <p><?=$post['date']?></p>
                          </div>
                          <div style="float: right;"></div>
                          <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>

				<div class="entry">
					<?=$post['text']?>
				</div>

                <div class="postmetadata">
                	<a href="/?post=<?=$post['id']?>">Читать далее »</a>
                </div>
			</div>
<?php endforeach; ?>

<div class="navigation">
			<div class="wp-pagenavi">
<!-- <span class="pages">Страницы:</span><span class="current"><?=$_GET['page']?></span> -->

<?php foreach(range(1,$pages) as $page): ?>
	<a href="?page=<?=$page?>" class="page larger"><?=$page?></a>
<?php endforeach; ?>
<!--<span class="extend">...</span><a href="?page=88" class="last">88</a>-->
</div>		</div>
</div>       
</div>
</div>