<!doctype html>
<html>
    <head>
        <title>validate email with filter_var()</title>
    </head>
    <body>
        <?php
            if (isset($_GET['email']) && !empty($_GET['email']))
            {
                //validate email
                if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
                {
                    echo 'the email is valid';
                }
                else
                {
                    echo 'invalid email, try again';
                }
            }
            else
            {
                echo 'please enter an email';
            }
        ?>
        <form action='' method='get'>
            email : <input type='text' name='email'/>
            <input type='submit' name='submit'/>
        <form>    
    </body>
</html>