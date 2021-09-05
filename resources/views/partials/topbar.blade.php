<!-- Navbar -->
@if ( Session::has('first-access') )
<script type="text/javascript">
   var $message = "<?php echo Session::get('name'); ?>";
   var $photo = "<?php echo Session::get('photo'); ?>";
   if($photo == ''){
     $photo = "assets/admin-lte/dist/img/avatar-default.png";
   }
   // console.log($photo);
   window.onload = function (){
     welcomeMessage('success', $message, $photo);
   };
</script>
{{ Session::forget('first-access') }}
@endif
<!-- #COLOR# -->
<nav class="{{ Session::get('nav') }} main-header navbar navbar-expand navbar-light border-bottom" id="nav">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
      </li>
   </ul>
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- Name -->
      <li class="nav-item dropdown">
         <a style="cursor:default" class="nav-link" data-toggle="dropdown" href="javascript:void(0)">{{ Auth::user()->email }}</a>
         <span class="badge navbar-badge"><i class="fa fa-circle" style="color:#56BD00;" aria-hidden="true"></i></span>
      </li>
      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="far fa-bell"></i>
          <span class="badge badge-residentSystem navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <span class="material-icons-outlined mr-2">
                email
            </span> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <span class="material-icons-outlined mr-2">
            person_add_alt
            </span> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <span class="material-icons-outlined mr-2">
            insert_drive_file
            </span> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- Exit Dropdown Menu -->
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="{{ route('home') }}">
         <i class="fas fa-sign-out-alt"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <div class="dropdown-header">
           @if (Session::get('photo') != '')
            <img src="{{ url( Session::get('photo') ) }}"  class="img-circle elevation-2 avatar" alt="User Image">
          @else
          <img src="{{ url( 'assets/admin-lte/dist/img/avatar-default.png' ) }} " class="img-circle elevation-2 avatar" alt="User Image">
          @endif
         </div>
         <span class="dropdown-header">{{ Auth::user()->name }}<span>
         <div class="dropdown-divider"></div>
         <div class="dropdown-divider"></div>
         <ul class="navbar-nav ml-auto">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" >
            {{ __('Salir') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="{{ route('controlPanel') }}">
           <i class="fa fa-cogs" aria-hidden="true"></i></a>
         </li>
   </ul>
</nav>
<!-- /.navbar -->
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">

    </div>
  </aside>
