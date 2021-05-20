
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <i class="fas fa-tachometer-alt fa-2x"></i>
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/marcana/dashboard.php' ? 'active' : 'link-dark' ?> ">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>

        <li>
            <a href="dashboard.php?p=order" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/marcana/dashboard.php?p=order' ? 'active' : 'link-dark' ?>">
                <i class="fas fa-list-ul"></i>
                Orders
            </a>
        </li>


    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" id="list-sidebar">
            <li><a class="dropdown-item" href="dashboard.php?p=settings">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="action/logout.php">Sign out</a></li>
        </ul>
    </div>
</div>
<script>
    (function() {
        $('#dropdownUser2').click(() => {
            $('#list-sidebar').toggle()
        })
    })()
</script>