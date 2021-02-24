  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://torrentesoftware.com/assets/images/team/sebas.webp" alt="User Image" width="80" height="80">
      <div>
        <p class="app-sidebar__user-name">Sebastian</p>
        <p class="app-sidebar__user-designation">Back-Developer</p>
      </div>
    </div>
    <ul class="app-menu">
      <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Cuidadores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{Route('cuidador.index')}}"><i class="icon fa fa-circle-o"></i>lista de Cuidadores</a></li>
          <li><a class="treeview-item" href="{{Route('cuidador.create')}}"><i class="icon fa fa-circle-o"></i>Crear Cuidador</a></li>
          <li><a class="treeview-item" href="{{Route('assing.index')}}"><i class="icon fa fa-circle-o"></i>Asignar Cuidador</a></li>
          {{-- <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Reporte de cuidador</a></li> este ya fue includo dentro de otra vista--}}
        </ul>
      </li>
    </ul>
  </aside>