<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Registration Page";?>
<?php include html_path.ds.'header.php' ?>

<?php
$tit=$_GET['title'];

reply_topic();
?>
<div class=container>
    <h3><?php echo $tit;?></h3>
<form method="post">
    <textarea name="txt_reply" cols="50" rows="10"></textarea><br/>
    <input type="submit" name="reply" value="submit">
</form>
<div>

<?php include html_path.ds.'footer.php' ?>
