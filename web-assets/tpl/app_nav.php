<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a
class="navbar-brand" href="/echocash/dashboard.php">Echocash</a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown"> <ul class="navbar-nav">
    <?php
    $logged_in_options = "
    <li class='nav-item active'> <a class='nav-link' href='/echocash/dashboard.php'>Echocash<span class='sr-only'>(current)</span></a></li>
    <li class='nav-item'> <a class='nav-link' href='/echocash/forms/bank_account.php'>My account</a> </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>My Profile</a>

        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <p class='dropdown-item'>
      ";

            $client_id = isset($_SESSION['client_id']) ? $_SESSION['client_id'] : null;
            $display_sql = <<<SQL
              SELECT * FROM clients WHERE client_id = $client_id;
SQL;
            $display_result = $dbh->query($display_sql);

            if ($display_result) {
              while ($row = $display_result->fetch_assoc()) {
                $logged_in_options = $logged_in_options . " Name: " . $row['first_name'] . " " . $row['last_name'] . " ";
              }
            }


        $logged_in_options = $logged_in_options . "</p>
        <a class='dropdown-item'> <a class='btn btn-secondary' href='/echocash/index.php?action=logout' style='float: right; margin-right: 20px;'>Logout</a>";

        if (isset($_SESSION['client_id'])) {
          echo $logged_in_options;
        }
          ?>
        </a>
      </div>

    <form class="form-inline my-2 my-lg-0">

    </form>
  </div>
</nav>
<div class="container"> <br>
