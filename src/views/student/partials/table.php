<?php if ($students->num_rows > 0): ?>
    <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['course'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr>
        <td colspan="4">No students found 😢</td>
    </tr>
<?php endif; ?>