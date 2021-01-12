<?php
if (isset($_POST['submit'])) {
    // name---------------------------------------------------------
    if (empty($_POST['name'])) {
?>
        <script>
            swal("Error", "Please enter your name", "error");
        </script>
        <?php
    } else {
        $name = trim($_POST['name']);
        $name = htmlentities($_POST['name']);

        // username------------------------------------------------------
        if (empty($_POST['username'])) {
        ?>
            <script>
                swal("Error", "Please enter username", "error");
            </script>
            <?php
        } else {
            $username = trim($_POST['username']);
            $username = htmlentities($_POST['username']);

            // email----------------------------------------------------------
            if (empty($_POST['email'])) {
            ?>
                <script>
                    swal("Error", "Please enter your e-mail", "error");
                </script>
                <?php
            } else {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                ?>
                    <script>
                        swal("Error", "Please enter valid e-mail", "error");
                    </script>
                    <?php
                } else {
                    $email = trim($_POST['email']);

                    // phone number-------------------------------------------
                    if (empty($_POST["phone"])) {
                    ?>
                        <script>
                            swal("Error", "Please enter your phone number", "error");
                        </script>
                        <?php
                    } else {
                        $phone = trim($_POST['phone']);

                        //password-----------------------------------------------
                        if (empty($_POST["password"])) {
                        ?>
                            <script>
                                swal("Error", "Please enter password", "error");
                            </script>
                            <?php
                        } else {
                            $password = $_POST['password'];
                            // $pass = password_hash($password, PASSWORD_DEFAULT);

                            $token = bin2hex(random_bytes(15));

                            $sql = "INSERT INTO `send` (`name`,`username`,`email`,`phone`,`password`,`token`,`status`) VALUES ('$name','$username','$email','$phone','$password','$token','inactive')";
                            $result = mysqli_query($connect, $sql);
                            if ($result) {
                                echo '<strong>Thank you ' . $name . '.</strong> Sign in Successfull.';
                            ?>
                                <script>
                                    // let btn = document.getElementById("submit");
                                    // btn.addEventListener("click", function() {
                                    // let name = document.getElementById("name").value;
                                    swal("Success", name, "success");
                                    // })
                                </script>
<?php
                            } else {
                                echo '<strong> Sorry! </strong> Inconvenience occur in Database </div>';
                            }
                        }
                    }
                }
            }
        }
    }
} ?>