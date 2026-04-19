<?php
include 'layout/header.php';
include "./database/env.php";
?>

  <div class="container mt-5">
    <h2 class="mb-4 text-center">Student List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th> <th>Name</th>
                <th>Address</th>
                <th>Number</th>
                <th>Payment</th>
            </tr>
        </thead>
       <tbody>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row["id"]) ?></td>
                <td><?= htmlspecialchars($row["name"]) ?></td>
                <td><?= htmlspecialchars($row["address"]) ?></td>
                <td><?= htmlspecialchars($row["number"]) ?></td>
                <td><?= htmlspecialchars($row["payment"]) ?></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="5" class="text-center">No students found</td></tr>
    <?php endif; ?>
</tbody>
    </table>
</div>
    
<?php
include 'layout/footer.php';
?>