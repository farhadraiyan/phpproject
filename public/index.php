<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here all functionality?>
<?php $page_title="Virtual Mobi help";?>
<?php include html_path.ds.'header.php' ?>
    <div class="container">

        <table id="tbl_discussion">

            <?php
            echo '<form method="post" ><input type="submit" name="topsub" value="Create a Topic"></form>';

            @topic_authentication($_POST['topsub']);
            view_all_topic();

            ?>

        </table>
    </div>
<?php include html_path.ds.'footer.php' ?>