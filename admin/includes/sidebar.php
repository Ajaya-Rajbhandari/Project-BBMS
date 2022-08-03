<!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item <?php if($_SERVER['PHP_SELF']=='/projectBBMS/admin/index.php'){ echo 'active'; } ?>">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="read-donor.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Donor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="read-requests.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Requests</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="logout.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
