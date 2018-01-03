<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Registration Page";?>
<?php include html_path.ds.'header.php' ?>

<section>
    <div class="row">
        <div class="col">
            <form id="create" method="post">
                <div class="form-group" >
                    <h2 class="log_create">Create Your Account</h2>
                    <?php include '../all php/errors.php'?>
                    <label >User Name</label></br>
                    <input class="crt" type="text" name="username"/></br></br>
                    <label >Email Address</label></br>
                    <input class="crt" type="text" name="email"/></br></br>
                    <label >Password</label></br>
                    <input class="crt" type="text" name="password"/></br></br>
                    <label >Program Name</label></br>
                    <select class="crt" name="program">
                        <option value="T127">Computer Programmer Analyst (T127)</option>
                        <option value="T141">Computer Systems Technician (T141)</option>
                        <option value="T147">Computer Systems Technology (T147)</option>
                        <option value="T163">Game Programming (T163)</option>
                    </select></br></br>

                    <input id="btncrt" class="log" type="submit" name="create" value="Create Account"/>

                </div>
                <a class="hm" href="index.php">Home</a>
            </form>
        </div>

    </div>
</section>
<?php include html_path.ds.'footer.php' ?>