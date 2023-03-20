
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('img/logo.png')}}" alt="Youssad Loacation Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Lafac.Net</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->image}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name ." ". auth()->user()->firstName}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="" class="nav-link {{addClass('home', 'active')}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Accuiel</p>
                    </a>
                </li>
                
               
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Tableau de bord <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vue globale</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Locations</p>
                            </a>
                        </li>
                    </ul>
                </li>
              
                @can('superadmin')
                <li class="nav-item {{openMenu('superadmin.habilitations.users.index')}}">
                    <a href="#" class="nav-link {{active('superadmin.habilitations.users.index')}}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                        Habilitation 
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
               
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('superadmin.habilitations.users.index')}}" class="nav-link {{active('superadmin.habilitations.users.index')}}">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>Utilisateurs</p>
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="nav-icon fas fa-fingerprint"></i>
                                <p>Roles et permissions</p>   
                            </a>
                        </li>
                    </ul>
                </li>  
                @endcan
                <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Gestion d'articles</p>   
                            <i class="right fas fa-angle-left"></i>
                        </a>
                           
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>Type d'articles</p>   
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-list-ul"></i>
                                    <p>Articles</p>   
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-sliders-h"></i>
                                    <p>Tarifications</p>   
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="nav-header">CAISSE</li>
                
                <li class="nav-item">
                        <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>Gestion des paiements</p>   
                        </a>
                </li>
            
                
                
            </ul>
        </nav>
    </div>
</aside>
   