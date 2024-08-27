<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="{{asset('Back/assets/images/logo-icon-2.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">Gestion Vente</h4>
        </div>
        <div class="toggle-icon ms-auto">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <i class="bi bi-house-door"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
          <ul>
            <li> <a href="../../dashboard">
              <i class="bi bi-circle"></i>Default
              </a>
            </li>
            <li> <a href="../../dashboard">
              <i class="bi bi-circle"></i>Alternate
              </a>
            </li>
          </ul>
        </li>
        
        <li class="menu-label">Gestion Ventes</li>
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <i class="bi bi-handbag"></i>
            </div>
            <div class="menu-title">Ventes</div>
          </a>
          <ul>
            <li> <a href="{{route('vente.create')}}">
                <i class="bi bi-circle"></i>Ajouter Vente
              </a>
            </li>
            <li> <a href="/backoffice/vente">
                <i class="bi bi-circle"></i>Lister Vente
              </a>
            </li>
          </ul>
        </li>
   
      </ul>
      <!--end navigation-->
    </aside>