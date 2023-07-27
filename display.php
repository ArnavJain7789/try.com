<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    echo "<table border='1' cellspacing=7 width=100%  height=20% >
            <tr>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
            </tr>";

    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td>".$result['email']."</td>";
        echo "<td>".$result['address']."</td>";
        echo "<td>".$result['phonenumber']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records";
}

mysqli_close($conn);
?>


