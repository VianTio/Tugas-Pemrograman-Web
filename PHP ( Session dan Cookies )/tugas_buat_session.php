<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <select name="user">
            <option value="" disabled selected>Choose User</option>
            <option value="1">User 1</option>
            <option value="2">User 2</option>
            <option value="3">User 3</option>
        </select>

        <input type="submit" name="submit" vlaue="Choose options">
    </form>

    <?php

    $user = [
        ["Vian Azis Tio Riwanto", "E31191848"],
        ["Maulana Ismail", "E31191441"],
        ["Calvinda Risky Adiputra", "E31191551"],
    ];

    if (isset($_POST['submit'])) {
        if (!empty($_POST['user'])) {
            $selected = $_POST['user'];
            switch ($selected) {
                case 1:
                    $_SESSION["info"] = $user[0];
                    echo "<br><p>Anda Memilih User 1</p><br>";
                    break;
                case 2:
                    $_SESSION["info"] = $user[1];
                    echo "<br><p>Anda Memilih User 2</p><br>";
                    break;
                case 3:
                    $_SESSION["info"] = $user[2];
                    echo "<br><p>Anda Memilih User 3</p><br>";
                    break;
                default:
                    $_SESSION["info"] = null;
            }
        } else {
            echo 'Anda Belum Memilih User.';
        }
    }
    ?>

    <form action="tugas_lihat_session.php">
        <input type="submit" value="Lihat Info User" />
    </form>

</body>

</html>