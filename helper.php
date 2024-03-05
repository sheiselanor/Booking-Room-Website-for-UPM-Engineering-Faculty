<!-- AIDA -->

<?php
function menu()
{ ?>

 
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="admin_landing.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link" data-bs-target="#components-nav"  href="#">
      <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content " data-bs-parent="#sidebar-nav">

      
      <li>
        <a href="admin_landing.php?page=menu-usermng">
          <i class="bi bi-circle"></i><span>User Management</span>
        </a>
      </li>

      <li>
        <a href="admin_landing.php?page=menu-list">
          <i class="bi bi-circle"></i><span>Booking List</span>
        </a>
      </li>
      
      <li>
        <a href="admin_landing.php?page=menu-audi">
          <i class="bi bi-circle"></i><span>Auditorium</span>
        </a>
      </li>
      <li>
        <a href="admin_landing.php?page=menu-lectureroom">
          <i class="bi bi-circle"></i><span>Lecture Room</span>
        </a>
      </li>
      <li>
        <a href="admin_landing.php?page=menu-lecturehall ">
          <i class="bi bi-circle"></i><span>Lecture Hall</span>
        </a>
      </li>
      <li>
        <a href="admin_landing.php?page=menu-thinker">
          <i class="bi bi-circle"></i><span>Thinker Space</span>
        </a>
      </li>
      <li>
        <a href="admin_landing.php?page=menu-lab">
          <i class="bi bi-circle"></i><span>Room Lab</span>
        </a>
      </li>
      <li>
        <a href="admin_landing.php?page=menu-meetroom">
          <i class="bi bi-circle"></i><span>Meeting Room</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->





</ul>

</aside>


<?php
}

?>