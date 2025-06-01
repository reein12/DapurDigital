<?php
// connect to database
require "./connect.php";

// make sure user click update button
if (isset($_POST["update"])) {
    // get unique id
    $id = $_POST["id"];

    // get all input data
    $foodName = $_POST["nama_makanan"];
    $descriptionFood = $_POST["deskripsi_makanan"];
    $howtoMake = $_POST["cara_membuat"];


    // sql query
    $query = "UPDATE showroom_mobil SET
            nama_makanan='$foodName',
            deskripsi_makanan='$descriptionFood',
            cara_membuat='$howtoMake',
            WHERE id=$id";

    // execute sql query
    $test = mysqli_query($conn, $query);

    // condition query is works or not
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_resep.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = list_resep.php;
        </script>
        ";
        exit;
    }
}

