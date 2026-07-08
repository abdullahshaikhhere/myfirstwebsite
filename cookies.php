
    <?php
    // setcookie("username", "Abdullah", time() + 3600);
    // if(isset($_COOKIE["username"])) {
    //     echo "Welcome back," . $_COOKIE["username"];
    // } else {
    //     echo "Please log in";
    // }


    // setcookie("Language", "English", time() +);
    // if (isset($_COOKIE["Language"])) {
    //     echo "Selected Language: " . $_COOKIE["Language"];
    // }

    // setcookie("theme", "dark", time() + (8400 * 30));

    // if (isset($_COOKIE[""]))

    // setcookie("cart", "LapTop,Mouse", time() - 86400);
    //   echo "cookies has been distroy"

    setcookie("Last_Page", "Products.php", time() + 3600);

    // if(isset($_COOKIE["Last_Page"])) {
    //     echo "Last Visited Page:" . $_COOKIE[""]
    // }


    if(isset($_COOKIE["visits"])) {
        $visits = $_COOKIE["visits"] + 1;
    } else {
        $visits = 1;
    }

    setcookie("visits", $visits, time( ) + 86400);
    echo "your have visited this page $visits times.";
    ?>
