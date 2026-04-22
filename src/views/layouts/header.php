<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container mt-4 page">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Student Management</h2>

    <div>
        <button id="themeToggle" class="btn btn-outline-secondary me-2">🌙</button>

        <?php if (isset($_SESSION['user'])): ?>
            <a href="index.php?action=logout" class="btn btn-danger">Logout</a>
        <?php endif; ?>
    </div>
</div>

