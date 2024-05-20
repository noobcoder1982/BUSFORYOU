<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Check.css">
    <title>Available Buses</title>
    
</head>
<body>
    <div class="container">
        <div class="row1">
            <h2 style="color: Blue;">Source to Destination Date</h2>
        </div>
        <div class="row2">
        <?php include_once ("connect.php"); ?>
<?php
$id = @$_GET['id'];
$sql = "SELECT * FROM `booking` WHERE `id`='$id'";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    $from_location = $row['from_location'];
    $to_location = $row['to_location'];
    $date = $row['date'];
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <table style='width:100%'>
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Time</th>
            <th>Date</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM `avabus` WHERE `from_loc`='$from_location' AND `to_loc`='$to_location'";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            $g_id = $row['id'];
            $g_from_loc = $row['from_loc'];
            $g_to_loc = $row['to_loc'];
            $g_time = $row['time'];
            $g_date = $row['date'];
            $g_price = $row['price'];
            echo "
  <tr>
    <th>$g_from_loc</th>
    <th>$g_to_loc</th>
    <th>$g_time</th>
    <th>$g_date</th>
    <th>$g_price</th>
    <th><a href='Seats.php?id=$g_id'>Book Now!</a></th>
  </tr>
                ";
        }
        ?>
    </table>
        </div>
    </div>
</body>
</html>
