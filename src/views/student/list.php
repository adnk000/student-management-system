<?php require __DIR__ . '/../layouts/header.php'; ?>

<style>
.glass-container {
    backdrop-filter: blur(10px);
    background: rgba(255,255,255,0.05);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.25);
}

/* Table hover */
.table tbody tr:hover {
    background: rgba(255,255,255,0.05);
}

/* Input glow */
.form-control:focus {
    box-shadow: 0 0 10px rgba(0,123,255,0.5);
}
</style>

<div class="container mt-5">
    <div class="glass-container">

        <div class="d-flex justify-content-between mb-3">
            <a href="index.php?action=create" class="btn btn-primary">+ Add Student</a>
        </div>

        <!-- 🔍 LIVE SEARCH -->
        <input id="searchInput" class="form-control mb-3" placeholder="Search students...">

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="tableBody">
                <?php require __DIR__ . '/partials/table.php'; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- ⚡ LIVE SEARCH SCRIPT -->
<script>
const input = document.getElementById("searchInput");
const tableBody = document.getElementById("tableBody");

input.addEventListener("keyup", () => {
    tableBody.style.opacity = "0.5";

    fetch(`index.php?action=search&keyword=${input.value}`)
        .then(res => res.text())
        .then(data => {
            tableBody.innerHTML = data;
            tableBody.style.opacity = "1";
        });
});
</script>

<?php require __DIR__ . '/../layouts/footer.php'; ?>