<?php
include('../db.php');
session_start();
// Retrieve vehicle information
include('../selecting_vehicle.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_header.css">
    <link rel="stylesheet" href="../styles/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <title>Home</title>
</head>
<body>
    

    <?php include('../header.php'); ?>

        <!-- Dashboard Section -->
        <section class="board">
            <div class="board-header">
                <h3>Vehicle Information</h3>
            </div>
            <div class="grid-container">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <a href="../vehicle_details.php?v_id=<?= htmlspecialchars($row['v_id']) ?>">
                            <div class="grid-item">
                                <h3><?= htmlspecialchars($row['vehicle_type']) ?></h3> 
                                <h3><?= htmlspecialchars($row['v_reg_no']) ?></h3>
                                <p>Insurance valid till: <?= htmlspecialchars($row['v_insurance_valid']) ?></p>
                                <p>Emission valid till: <?= htmlspecialchars($row['v_emission_valid']) ?></p>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No records found.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>
</html>

<?php
$conn->close();
?>
