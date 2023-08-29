<nav class="navbar navbar-expand-lg sticky-top shadow-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Movie Ticket Booking</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">About</a>
                </li>
                </li>
                <?php
                if (!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="userlogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="moviebookingpage.php">Book Movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.js"></script>
</nav>