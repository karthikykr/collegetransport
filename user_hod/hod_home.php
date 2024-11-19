<?php
include('../db.php');

// Retrieve vehicle information
$sql = "SELECT * FROM add_vehicle";
$result = $conn->query($sql);
?>

    <?php include('../header.php'); ?>

        <!-- Dashboard Section -->
        <section class="board">
            <div class="board-header">
                <h3>Vehicle Information</h3>
            </div>
            <div class="grid-container">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <a href="../admin/vehicle_detail.php?v_id=<?= htmlspecialchars($row['v_id']) ?>">
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