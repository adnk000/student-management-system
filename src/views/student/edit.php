<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Edit Student</h2>

<form action="index.php?action=update" method="POST">

<input type="hidden" name="id" value="<?php echo $student['id']; ?>">

<input class="form-control mb-2" type="text" name="name" value="<?php echo $student['name']; ?>">
<input class="form-control mb-2" type="text" name="course" value="<?php echo $student['course']; ?>">

<button class="btn btn-primary">Update</button>

</form>
</div>

