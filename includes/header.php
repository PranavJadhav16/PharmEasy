<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0d8592;">
        <div class="container-fluid">
            <a href="index.php"> <img src="images/PharmEasy.png" id="image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; " aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color: white; font-size:bold;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white; font-size:bold;">
            <li><a class="dropdown-item" href="search.php?cat=medicine">Medicine</a></li>
            <li><a class="dropdown-item" href="search.php?cat=self-care">Self Care</a></li>
            <li><a class="dropdown-item" href="search.php?cat=machine">Medical Equipments</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <form class="d-flex" action="search.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" name="search_text">
            <button class="btn btn-outline-light" type="submit" value="go" name="search"><i class="fas fa-search"></i></button>
        </form>
    </li>
</ul>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <?php
    if (!isset($_SESSION['user_id'])) {
        echo "<li class='nav-item'><a class='nav-link' href='login.php' style='color: white; font-size:bold;'>Log in</a></li>";
    } else {
        $user_id = $_SESSION['user_id'];
        $check_user_id = check_user($user_id);
        if ($check_user_id == 1) {
            $user_info = get_user($user_id);
            $fname = $user_info['user_fname'];
            echo "<li class='nav-item'><span class='nav-link' style='color: white; font-size:bold;'>Hi, $fname</span></li>";
            echo "<li class='nav-item'><a class='nav-link' href='logout.php' style='color: white; font-size:bold;'>Log out</a></li>";
        } else {
            post_redirect("logout.php");
        }
    }
    ?>
    <li class="nav-item">
        <a class="nav-link" href="cart.php" style="color: white; font-size:bold;">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </li>
</ul>



          
            </div>
        </div>
    </nav>
</header>