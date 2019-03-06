<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">tasks app</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="items.php">add task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="task.php">view task</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            li class="nav-item">
            <a class="nav-link" href="#">Log in as <?=$_SESSION['info']['names']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sign out</a>
            </li>
        </ul>
    </div>
</nav>