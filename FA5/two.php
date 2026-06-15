<?php

setcookie("firstname", "Fiona", time() + 10);
setcookie("middlename", "N.", time() + 20);
setcookie("lastname", "Fausto", time() + 30);

?>
<!DOCTYPE html>
<html>

<head>
<title>Cookie Activity</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h2>Cookie Information</h2>
<div class="output">

<p>
<strong>First Name:</strong>
<?php

            if(isset($_COOKIE['firstname']))
                echo $_COOKIE['firstname'];
            else
                echo "Expired";

            ?>
</p>
<p>
<strong>Middle Name:</strong>
<?php

            if(isset($_COOKIE['middlename']))
                echo $_COOKIE['middlename'];
            else

                echo "Expired";

            ?>
</p>
<p>

<strong>Last Name:</strong>
<?php

            if(isset($_COOKIE['lastname']))
                echo $_COOKIE['lastname'];
            else
                echo "Expired";

            ?>
</p>
</div>

</div>
</body>
</html>
 