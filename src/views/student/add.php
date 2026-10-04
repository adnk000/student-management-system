<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php require __DIR__ . '/../layouts/header.php'; ?>
<div class="container mt-5">
<h2>Add Student</h2>

<form action="index.php?action=store" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

<input class="form-control mb-2" type="text" name="student_id" placeholder="Student ID" required>
<input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
<input class="form-control mb-2" type="text" name="father_name" placeholder="Father Name">

<select class="form-control mb-2" name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>

<input class="form-control mb-2" type="date" name="dob">
<input class="form-control mb-2" type="text" name="course" placeholder="Course">
<textarea class="form-control mb-2" name="address" placeholder="Address"></textarea>
<input class="form-control mb-2" type="email" name="email" placeholder="Email">
<input class="form-control mb-2" type="text" name="phone" placeholder="Phone">

<button class="btn btn-success">Register</button>

</form>
</div>
<?php require __DIR__ . '/../layouts/footer.php'; ?>