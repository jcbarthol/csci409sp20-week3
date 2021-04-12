<!DOCTYPE html>
<html class="background" lang="en">

<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $hName = trim(strtolower($_POST['hName']));
        $a1 = trim(strtolower($_POST['a1']));
        $hCity = trim(strtolower($_POST['hCity']));
        $hState = trim(strtolower($_POST['hState']));
        $hZip = trim(strtolower($_POST['hZip']));
        $hDesc = trim(strtolower($_POST['hDesc']));
        $hImage = trim(strtolower($_POST['hImage']));

    }

?>
    <form name="newHotel" id="newHotel" method="post" action="/hotels/store">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <br><br>
        <label for="hName">Name:</label>
        <input type="text" name="hName" id="hName" size="50" maxlength="100" placeholder="Name">
        <br><br>
        <label for="a1">Address 1:</label>
        <input type="text" name="a1" id="a1" size="50" maxlength="100" placeholder="Address 1">
        <br><br>
        <label for="hCity">City:</label>
        <input type="text" name="hCity" id="hCity" size="50" maxlength="100" placeholder="City">
        <br><br>
        <label for="hState">State:</label>
        <input type="text" name="hState" id="hState" size="50" maxlength="100" placeholder="State">
        <br><br>
        <label for="hZip">Zip:</label>
        <input type="text" name="hZip" id="hZip" size="50" maxlength="100" placeholder="Zip">
        <br><br>
        <label for="hDisc">Description:</label>
        <input type="text" name="hDisc" id="hDisc" size="50" maxlength="100" placeholder="Discription">
        <br><br>
        <label for="hImage">Image:</label>
        <input type="text" name="hImage" id="hImage" size="50" maxlength="100" placeholder="Image">
        <br><br>
        <label for="submit">Submit:</label>
        <input type="submit" name="submit" id="submit" value="submit"><br><br>
    </form>


</body>


</html>
