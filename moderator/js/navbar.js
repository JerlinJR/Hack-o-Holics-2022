const template = document.getElementById('template-road');

template.innerHTML = `
<nav class="side-navbar z-index-40">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="...">
    <div class="ms-3 title">
      <h1 class="h4 mb-2">Mark Stephen</h1>
      <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Web Designer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
  <ul class="list-unstyled py-4">
    <li class="sidebar-item"><a class="sidebar-link" href="moderator.php" > 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
          <use xlink:href="#real-estate-1"> </use>
        </svg>Home </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="stateHighway.php" target="_blank"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
          <use xlink:href="#portfolio-grid-1"> </use>
        </svg>State Highway </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="districtHighway.php" target="_blank"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#portfolio-grid-1"> </use>
          </svg>District Highway</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="villageRoad.php" target="_blank"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Village Road</a></li>
    <li class="sidebar-item"><a class="sidebar-link" href="charts.html" target="_blank"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
          <use xlink:href="#sales-up-1"> </use>
        </svg>Charts </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="components.php" target="_blank"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#survey-1"> </use>
          </svg>Components </a></li>
    <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
          <use xlink:href="#disable-1"> </use>
        </svg>Login page </a></li>
  </ul>
</nav>`
document.body.appendChild(template.content);