<?php
session_start();
@$username="";
@$password="";
@$email="";
$program="";
$errors=[];
if(isset($_POST['create']))
{
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    @$email=$_POST['email'];
    if($_POST['program']=='T127')
    {
        $program="T127";
    }
    if($_POST['program']=='T141')
    {
        $program="T141";
    }
    if($_POST['program']=='T147')
    {
        $program="T147";
    }
    if($_POST['program']=='T163')
    {
        $program="T163";
    }
    //checking if empty
    if(empty($username))
    {
        array_push($errors,"username is required");
    }
    if(empty($email))
    {
        array_push($errors,"email is required");
    }
    if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
    {
        try{

            $stm=$db_connection->prepare("INSERT INTO user_register (user_name,password,email,program) VALUES(:un,:pw,:em,:pro)");

            @$un=$username;
            @ $pw=$password;
            @$em=$email;
            @ $pro=$program;
            $stm->bindParam(":un", $un, PDO::PARAM_STR);
            $stm->bindParam(":pw", $pw, PDO::PARAM_STR);
            $stm->bindParam(":em", $em, PDO::PARAM_STR);
            $stm->bindParam(":pro", $pro, PDO::PARAM_STR);
            $stm->execute();
            $_SESSION['username']=$username;
            $_SESSION['success']="  Successfully log in";
            header('location:../public/index.php');



        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}
//login from login page
if(isset($_POST['login']))
{
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    if(empty($username))
    {
        array_push($errors,"username is required");
    }
    if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
    {
        $password=md5($password);//enctypt password
        $stm=$db_connection->prepare("SELECT * FROM user_register user_name=':un' AND password=':pw' ");
        @$un=$username;
        @ $pw=$password;

        $stm->bindParam(":un", $un, PDO::PARAM_STR);
        $stm->bindParam(":pw", $pw, PDO::PARAM_STR);

        $stm->execute();
        $result = $stm->fetch();
        if($result['username']==$un)
        {
            $_SESSION['username']=$username;
            $_SESSION['success']="  Successfully log in";
            header('location:../public/index.php');
        }
        else{
            array_push($errors, "wrong pass/username");
        }
    }


}
//to rdirect to login page
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
