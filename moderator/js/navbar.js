const template = document.getElementById('template-road');

template.innerHTML = `
<nav class="side-navbar z-index-40">
  </div>
  <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
  <ul class="list-unstyled py-4">
        <li class="sidebar-item"><a class="sidebar-link" href="home.php"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
          <use xlink:href="#portfolio-grid-1"> </use>
        </svg>Home </a>
        </li>

        <li class="sidebar-item"><a class="sidebar-link" href="components.php"> 
          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
            <use xlink:href="#survey-1"> </use>
          </svg>Price Updater </a>
        </li>
    
  </ul>
</nav>`
document.body.appendChild(template.content);