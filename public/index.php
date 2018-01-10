<?php include '../all php/process.php' //here all functionality?>
<?php $page_title="Virtual Mobi help";?>
<?php include html_path.ds.'header.php' ?>
    <div class="container">

        <table id="tbl_discussion">

            <?php
            echo '
<form method="post" >
<input style="background-color: mediumseagreen;" type="submit" name="topsub" value="Create a Topic">
</form>';


            if(topic_authentication())
            {
                if(isset($_POST['topsub']))
                {
                    header("location: topic.php");
                }

            }
            view_all_topic();
            search_topic();
            ?>

        </table>
    </div>
<?php include html_path.ds.'footer.php' ?>