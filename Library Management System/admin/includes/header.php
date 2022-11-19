<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
    Library
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      
      <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->

      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="add_books.php">Add books</a>
            <a class="dropdown-item" href="view_books.php">View Books</a>
        </div>
      </li><!-- Smaller devices menu END -->

      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          users
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="add_admin.php">Add Admin</a>
            <a class="dropdown-item" href="view_admin.php">Admin list</a>
            <a class="dropdown-item" href="view_user.php">User list</a>
        </div>
      </li><!-- Smaller devices menu END -->
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Accout details</a>
            <a class="dropdown-item" href="change_password.php">change password</a>
        </div>
      </li><!-- Smaller devices menu END -->

      <li class="nav-item d-sm-block d-md-none">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
      
    </ul>
  </div>
</nav><!-- NavBar END -->