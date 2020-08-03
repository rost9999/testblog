<?php

$sql = "SELECT * FROM `post` WHERE `id` = ".$_GET['post'];
$result = mysqli_query($db, $sql);
$post = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
?>

<div id="body_left">
    	<div id="body_left_content">


	<div id="content" class="narrowcolumn">

			
			<div class="post" id="post-<?=$post['id']?>">
                <div class="post-top">
                    <div class="post-title">
                        <div class="left">
                          <h2><?=$post['title']?></h2>
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
</div>
</div>  
</div>
</div>
<?php

$sql = "UPDATE `post` SET `view` = `view` + 1 WHERE `id` = ".$_GET['post'];
$result = mysqli_query($db, $sql);
?>