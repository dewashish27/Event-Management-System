<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchanala 2k20</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->

        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form method="post" action="verify_login.php">
                        <div class="form-group">
                            <label for="usn"> Student USN: </label>
                            <input type="text"
                                   id="usn"
                                   name="usn_id"
                                   class="form-control">
                            
                            <label for="pass"> Password: </label>
                            <input type="password"
                                   id="pass"
                                   name="pass_id"
                                   class="form-control">
                        </div>
                        <button type="submit" name='submit' class = "btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

