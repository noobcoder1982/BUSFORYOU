<?php include_once ("connect.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="seatbooking.css"/>
    </head>
    <body>
    <?php
 $busID = @$_GET['id'];
 $token = rand(0, 999999);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book'])) {
    // Assuming $conn is your database connection
    foreach ($_POST as $key => $value) {
        if (substr($key, 0, 1) === 's' && $value == 'on') {
            $seatNumber = substr($key, 1);
            $sql = "INSERT INTO `bookseats`(`id`, `token`, `busID`, `seatID`) VALUES (null,'$token','$busID','$seatNumber')";
            $query = mysqli_query($conn, $sql);
            if ($query) {

            } else {
                echo "Error booking Seat $seatNumber: " . mysqli_error($conn) . "<br>";
            }
        }
    }
    echo "<meta http-equiv=\"refresh\" content=\"0; url=Ticket.php?token=$token\">";
    exit();
}
?>
        <div class="box">
            <div class="title">Seat Reservation</div>
            <div class="col1">
                <form action="Seats.php?id=<?=$busID?>" method="POST">
                <input type="checkbox" name="s1" value="on">
                <label for="s1">01</label>
    <input type="checkbox" name="s2" value="on">
    <label for="s1">02</label>
    <input type="checkbox" name="s3" value="on">
    <label for="s1">03</label>
    <input type="submit" name="book" value="Book Seat">
                </form>
        </div>
    </div>
    <script>
        // Get all checkboxes and their labels
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const labels = document.querySelectorAll('label');

// Add click event listener to each label
labels.forEach(label => {
    label.addEventListener('click', () => {
        // Get the corresponding checkbox
        const checkbox = label.previousElementSibling;
        
        // Toggle the checkbox state
        checkbox.checked = !checkbox.checked;
    });
});

    </script>
    </form>
    </div>
</body>
</html>