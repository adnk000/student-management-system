<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php require __DIR__ . '/../layouts/header.php'; ?>
<div class="container mt-5">
<h2>Edit Student</h2>

<form action="index.php?action=update" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

<input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">

<input class="form-control mb-2" type="text" name="student_id" value="<?php echo htmlspecialchars($student['student_id']); ?>" placeholder="Student ID" required>
<input class="form-control mb-2" type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" placeholder="Name" required>
<input class="form-control mb-2" type="text" name="father_name" value="<?php echo htmlspecialchars($student['father_name']); ?>" placeholder="Father Name">

<select class="form-control mb-2" name="gender">
    <option value="Male" <?php echo $student['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
    <option value="Female" <?php echo $student['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
</select>

<input class="form-control mb-2" type="date" name="dob" value="<?php echo htmlspecialchars($student['dob']); ?>">
<input class="form-control mb-2" type="text" name="course" value="<?php echo htmlspecialchars($student['course']); ?>" placeholder="Course">
<textarea class="form-control mb-2" name="address" placeholder="Address"><?php echo htmlspecialchars($student['address']); ?></textarea>
<input class="form-control mb-2" type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" placeholder="Email">
<input class="form-control mb-2" type="text" name="phone" value="<?php echo htmlspecialchars($student['phone']); ?>" placeholder="Phone">

<button class="btn btn-primary">Update</button>

</form>
</div>
<?php require __DIR__ . '/../layouts/footer.php'; ?>

