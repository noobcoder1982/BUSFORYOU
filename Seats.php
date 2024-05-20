<?php include_once ("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="seatbooking.css" />
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
            <form action="Seats.php?id=<?= $busID ?>" method="POST">
                <input type="checkbox" name="s1" value="on">
                <label for="s1">01</label>
                <input type="checkbox" name="s2" value="on">
                <label for="s1">02</label>
                <input type="checkbox" name="s3" value="on">
                <label for="s1">03</label>
                <input type="checkbox" name="s4" value="on">
                <label for="s1">04</label>
                <input type="checkbox" name="s5" value="on">
                <label for="s1">05</label>
                <input type="checkbox" name="s6" value="on">
                <label for="s1">06</label>
                <input type="checkbox" name="s7" value="on">
                <label for="s1">07</label>
                <input type="checkbox" name="s8" value="on">
                <label for="s1">08</label>
                <input type="checkbox" name="s9" value="on">
                <label for="s1">09</label>
                <input type="checkbox" name="s10" value="on">
                <label for="s1">10</label>
                <input type="checkbox" name="s11" value="on">
                <label for="s1">11</label>
                <input type="checkbox" name="s12" value="on">
                <label for="s1">12</label>
                <input type="checkbox" name="s13" value="on">
                <label for="s1">13</label>
                <input type="checkbox" name="s14" value="on">
                <label for="s1">14</label>
                <input type="checkbox" name="s15" value="on">
                <label for="s1">15</label>
                <input type="checkbox" name="s16" value="on">
                <label for="s1">16</label>
                <input type="checkbox" name="s17" value="on">
                <label for="s1">17</label>
                <input type="checkbox" name="s18" value="on">
                <label for="s1">18</label>
                <input type="checkbox" name="s19" value="on">
                <label for="s1">19</label>
                <input type="checkbox" name="s20" value="on">
                <label for="s1">20</label>
                <input type="checkbox" name="s21" value="on">
                <label for="s1">21</label>
                <input type="checkbox" name="s22" value="on">
                <label for="s1">22</label>
                <input type="checkbox" name="s23" value="on">
                <label for="s1">23</label>
                <input type="checkbox" name="s24" value="on">
                <label for="s1">24</label>
                <input type="checkbox" name="s25" value="on">
                <label for="s1">25</label>
                <input type="checkbox" name="s26" value="on">
                <label for="s1">26</label>
                <input type="checkbox" name="s27" value="on">
                <label for="s1">27</label>
            </form>
            
        </div>
        <div class="col2">
            <form action="Seats.php?id=<?= $busID ?>" method="POST">
                <input type="checkbox" name="s28" value="on">
                <label for="s1">28</label>
                <input type="checkbox" name="s29" value="on">
                <label for="s1">29</label>
                <input type="checkbox" name="s30" value="on">
                <label for="s1">30</label>
                <input type="checkbox" name="s31" value="on">
                <label for="s1">31</label>
                <input type="checkbox" name="s32" value="on">
                <label for="s1">32</label>
                <input type="checkbox" name="s33" value="on">
                <label for="s1">33</label>
                <input type="checkbox" name="s34" value="on">
                <label for="s1">34</label>
                <input type="checkbox" name="s35" value="on">
                <label for="s1">35</label>
                <input type="checkbox" name="s36" value="on">
                <label for="s1">36</label>
                <input type="checkbox" name="s37" value="on">
                <label for="s1">37</label>
                <input type="checkbox" name="s38" value="on">
                <label for="s1">38</label>
                <input type="checkbox" name="s39" value="on">
                <label for="s1">39</label>
                <input type="checkbox" name="s40" value="on">
                <label for="s1">40</label>
                <input type="checkbox" name="s41" value="on">
                <label for="s1">41</label>
                <input type="checkbox" name="s42" value="on">
                <label for="s1">42</label>
                <input type="checkbox" name="s43" value="on">
                <label for="s1">43</label>
                <input type="checkbox" name="s44" value="on">
                <label for="s1">44</label>
                <input type="checkbox" name="s45" value="on">
                <label for="s1">45</label>
                <input type="checkbox" name="s46" value="on">
                <label for="s1">46</label>
                <input type="checkbox" name="s47" value="on">
                <label for="s1">47</label>
                <input type="checkbox" name="s48" value="on">
                <label for="s1">48</label>
                <input type="checkbox" name="s49" value="on">
                <label for="s1">49</label>
                <input type="checkbox" name="s50" value="on">
                <label for="s1">50</label>
                <input type="checkbox" name="s51" value="on">
                <label for="s1">51</label>
                <input type="checkbox" name="s52" value="on">
                <label for="s1">52</label>
                <input type="checkbox" name="s53" value="on">
                <label for="s1">53</label>
                <input type="checkbox" name="s54" value="on">
                <label for="s1">54</label>
            </form>
            
        </div>
        <FORM>
        <input type="submit" name="book" value="Book Seat">
        </FORM>
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