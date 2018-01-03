<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Login Page";?>
<?php include html_path.ds.'header.php' ?>
<?php
//
//    @$username=$_POST['username'];
//    @$password=$_POST['password'];
//try{
//    $stm=$db_connection->prepare("INSERT INTO user (User_name,Password) VALUES(:un,:pw)");
//    @$un=$username;
//   @ $pw=$password;
//    $stm->bindParam(":un", $un, PDO::PARAM_STR);
//    $stm->bindParam(":pw", $pw, PDO::PARAM_STR);
//    $stm->execute();
//
//}
//catch(PDOException $e)
//{
//    echo $e->getMessage();
//}
?>

    <section>
        <div class="row">
            <div class="col">
                <form id="login" method="post">
                    <div class="form-group" >
                        <h2 class="log_create">Sign in to Continue</h2>
                        <?php include '../all php/errors.php'?>

                        <label >User Name or Email Address</label></br>
                        <input class="log" type="text" name="username"/></br></br>
                        <label>Password</label></br>
                        <input class="log" type="text" name="password"></br></br>
                        <input id="btnlog" class="log" type="submit" name="login" value="Login"/>
                    </div>
                    <p>Don't have an Account?<a href="../public/create.php">      Create new Account</a></p>
                    <a class="hm" href="index.php">Home</a>
                </form>
            </div>

        </div>
    </section>







<?php include html_path.ds.'footer.php' ?>