 <!--**********************************
            Sidebar start
        ***********************************-->
 <div class="dlabnav">
     <div class="dlabnav-scroll">
         <ul class="metismenu" id="menu">
             <li class="nav-label first">Main Menu</li>
             <li class="{{ Route::is('home*') ? 'mm-active' : '' }}"><a class="has-arrow" href="javascript:void()"
                     aria-expanded="false">
                     <i class="la la-home"></i>
                     <span class="nav-text">Dashboard</span>
                 </a>
                 <ul>
                     <li>
                         <a href="{{ route('home') }}" class="{{ Route::is('home*') ? 'mm-active' : '' }}">Dashboard</a>
                     </li>
                 </ul>
             </li>

             <li class="{{ Route::is('users.*') ? 'mm-active' : '' }}"><a class="has-arrow" href="javascript:void()"
                     aria-expanded="false">
                     <i class="la la-users"></i>
                     <span class="nav-text">Staff Management</span>
                 </a>
                 <ul aria-expanded="false">
                     <li class="{{ Route::is('users.index') ? 'mm-active' : '' }}">
                         <a href="{{ route('users.index') }}">List of Staff</a>
                     </li>
                     <li class="{{ Route::is('users.create') ? 'mm-active' : '' }}">
                         <a href="{{ route('users.create') }}">Create Staff</a>
                     </li>
                 </ul>
             </li>

             <li class="{{ Route::is('roles.*') ? 'mm-active' : '' }}"><a class="has-arrow" href="javascript:void()"
                     aria-expanded="false">
                     <i class="la la-user"></i>
                     <span class="nav-text">Roles Management</span>
                 </a>
                 <ul aria-expanded="false">
                     <li class="{{ Route::is('roles.index') ? 'mm-active' : '' }}">
                         <a href="{{ route('roles.index') }}">List of Roles</a>
                     </li>
                     <li class="{{ Route::is('roles.create') ? 'mm-active' : '' }}">
                         <a href="{{ route('roles.create') }}">Create Roles</a>
                     </li>
                 </ul>
             </li>


         </ul>


         <div class="copyright">
             <p>© 2024 All Rights Reserved</p>
             <p class="fs-12">Made with <span class="heart"></span> by Md Joabyer</p>
         </div>
     </div>
 </div>
 <!--**********************************
            Sidebar end
        ***********************************-->
