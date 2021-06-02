
<aside id="sidebar-left" class="sidebar-left" >

    <div class="sidebar-header" >
        <div class="sidebar-title" style="background-color:#00639e;">
            <a style="color:#ffffff;"> Land-E-Market </a>
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle" >
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano" >
        <div class="nano-content" style="background-color:#00639e;">
            <nav id="menu" class="nav-main" role="navigation" style="background-color:#00639e;">
            
                <ul class="nav nav-main" style="background-color:#00639e;">
                    <li >
                        <a class="nav-link" href="/home">
                            <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
                            <span style="color:#ffffff;">Dashboard</span>
                        </a>                        
                    </li >
                   
                    <li class="nav-parent"  >
                        <a class="nav-link"  href="#" style="background-color:#00639e;">
                            <!-- <i class="fas fa-list-alt" aria-hidden="true"  ></i> -->
                           <i class="fas fa- fa-university"></i>

                            <span style="color:#ffffff;" >Property</span>
                        </a>
                        
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/sellerform" style="color:#ffffff;">
                                   Add Property Form
                                </a>
                            </li>
                        </ul>
                        
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li >
                                <a class="nav-link" href="/propertylist" style="color:#ffffff;">
                                   List Property
                                </a>
                            </li>
                        </ul>
                        {{-- @can('edit property') --}}
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/click_edit/id>" style="color:#ffffff;">
                                   Edit Property
                                </a>
                            </li>
                        </ul>
                        {{-- @endcan --}}
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/propertycategoryform" style="color:#ffffff;">
                                    PropertyCategoryForm
                                </a>
                            </li>
                        </ul>
                          
                        <ul class="nav nav-children" style="background-color:#00639e;" >
                            <li>
                                <a class="nav-link" href="/customerform" style="color:#ffffff;">
                                    CustomerForm
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/customerlist" style="color:#ffffff;">
                                    Customerlist
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/propertydetail" style="color:#ffffff;">
                                    PropertyDetail
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-children" style="background-color:#00639e;">
                            <li>
                                <a class="nav-link" href="/propertyview" style="color:#ffffff;">
                                    PropertyView
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-parent {{ Request::is('faq/*') ? 'nav-expanded' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fas fa-ship" aria-hidden="true"></i>
                            <span style="color:#ffffff;">Rent Property</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ Request::is('faq/add') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/rentform" style="color:#ffffff;">
                                    Add
                                </a>
                            </li>
                            <li class="{{ Request::is('faq/view') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/Rentlist" style="color:#ffffff;">
                                    View
                                </a>
                            </li>
                            <li class="{{ Request::is('faq/view') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/Click_Edit/id>" style="color:#ffffff;">
                                    Edit
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/roles') }}">
                            <!-- <i class="fas fa-images" aria-hidden="true"></i> -->
                            <i class="fa fa-lock" aria-hidden="true"></i>

                            <span style="color:#ffffff;">Admin Roles</span>
                        </a>                        
                    </li>
                     <li>
                        <a class="nav-link" href="{{ url('/permissions') }}">
                            <i class="fas fa-list-alt" aria-hidden="true"></i>
                            <span style="color:#ffffff;">Admin Permissions</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/users') }}">
                            <i class="fa fa-address-book"> </i> 
                            <span style="color:#ffffff;">users</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/about') }}">
                            <!-- <i class="fas fa-list-alt" aria-hidden="true"></i> -->
                            <i class="fa fa-crosshairs" aria-hidden="true"></i>
                            <span style="color:#ffffff;">about us</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/contact') }}">
                            <i class="fas fa-user-plus" aria-hidden="true"></i>
                            <span style="color:#ffffff;">contact us</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span style="color:#ffffff;">Home</span>
                        </a>                        
                    </li>
                   





                </ul>
            </nav>

            <hr class="separator" />

            
            <hr class="separator" />

            
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        

    </div>

</aside>
