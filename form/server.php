<pre>
    <?php 
        print_r($_SERVER);
    ?>

    <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name=($_POST['name']);
                $email=($_POST['email']);
                echo "Name:" . $name ."<br>";
                echo "Email:" . $email ."<br>";
            }
            else{
                echo "form not submitted";
            }
        ?>
</pre>