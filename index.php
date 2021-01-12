<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Light</title>
    <!-- Links -->
    <?php require "./_links.php" ?>
</head>

<body>
    <!-- Dark Light box -->
    <ul onmousedown="return false">
        <li>
            <span>dark</span>
            <span>light</span>
        </li>
    </ul>

    <!-- toggle bar -->
    <div class="toggle-btn" onclick="this.classList.toggle('active')">
        <div class="inner-circle"></div>
    </div>

    <section>
        <form action="" id="myForm" method="POST">

            <?php
            // database connection
            require './_db.php';
            echo "<br/><br/>";

            // mysqli connection
            require './_mysql.php';
            echo "<br/><br/>";
            ?>

            <div class="container">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" onselectstart="return false">
                </div><br>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username">
                </div><br>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" id="email" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false">
                </div><br>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone" id="phone">
                </div><br>

                <div class="form-group">
                    <label>Password</label>
                    <input class="password" type="password" name="password" id="password">
                    <i class="show fa fa-eye"></i>
                    <i class="hide fa fa-eye-slash"></i>
                </div><br>

                <p><a href="forgetp.php" style="color: violet; text-decoration: none">Forget Password</a></p><br>

                <div class="form-group">
                    <button type="submit" name="submit" id="submit" onclick="submit()">submit</button>
                </div>

            </div>
        </form>
    </section>
</body>

</html>

<script type="text/javascript">
    // password visiblity
    var passwordField = document.querySelector('.password');
    var show = document.querySelector('.show');
    var hide = document.querySelector('.hide');

    show.onclick = function() {
        passwordField.setAttribute("type", "text");
        show.style.display = "none";
        hide.style.display = "inline-block";
    }
    hide.onclick = function() {
        passwordField.setAttribute("type", "password");
        hide.style.display = "none";
        show.style.display = "inline-block";
    }

    // dark light box
    $(document).ready(function() {
        $('ul').click(function() {
            $('.toggle-btn').toggleClass('active')
            $('ul').toggleClass('active')
            $('body').toggleClass('dark')
            $('form').toggleClass('dark')
            $('button').toggleClass('dark')
            $('label').toggleClass('active')
            $('input').toggleClass('active')
        });
    });

    // toggle-btn 
    $(document).ready(function() {
        $('.toggle-btn').click(function() {
            $('ul').toggleClass('active')
            $('body').toggleClass('dark')
            $('form').toggleClass('dark')
            $('button').toggleClass('dark')
            $('label').toggleClass('active')
            $('input').toggleClass('active')
        });
    });
</script>