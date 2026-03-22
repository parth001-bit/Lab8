<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "View Records";
require_once '../includes/header.php';
require_once '../db/conn.php';
?>

<div class="container mt-5">
    <h1 class="mb-4">View Records</h1>

    <?php
    $sql = "SELECT * FROM client_info";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
                echo $row["client_id"] . " ";
                echo $row["email"] . " ";
                echo $row["address"] . " ";
                echo $row["city"] . " ";
                echo $row["province"] . " ";
                echo $row["postalcode"];
                echo "</p>";
            }
        } else {
            echo "<p>No records found</p>";
        }
    } else {
        echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
    }
    ?>

    <div class="mt-4">
        <form method="post" action="delete.php">
            <label for="client_id" class="form-label">Enter Client ID to Delete:</label>
            <input type="number" name="client_id" id="client_id" class="form-control" required>
            <button type="submit" class="btn btn-danger mt-3">Delete Record</button>
        </form>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>