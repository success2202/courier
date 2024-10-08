<div class="navigation-menu-group">
    <div class="open" id="dashboards">
        <ul>
         <li class="navigation-divider" style="margin: 0px; padding:20px 0px 0px 30px">Dashboard</li>
         <li>
            <a  href="{{route('admin.index')}}" data-toggle="tooltip" data-placement="right" title="Dashboard"
           data-nav-target="#dashboards">
           <i class="fa fa-home"></i> &nbsp;Dashboard</a>
        </li>

        <li class="navigation-divider" style="margin: 0px; padding:20px 0px 0px 30px">Courier</li>
        <li>
        <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Pages"
        data-nav-target="#dashboards">
         <i class="fa fa-file"></i> &nbsp; Manage Courier
         </a>
         <ul> 
             <li><a href="{{route('admin.courier.create')}}">Create Courier Info </a></li>
             <li><a href="{{route('admin.courier.index')}}">Manage </a></li>
             <li><a href="{{route('admin.courier.createReciept')}}">Create Reciept </a></li>
             
       </ul>
      </li>

        <li class="navigation-divider" style="margin: 0px; padding:20px 0px 0px 30px">Services</li>
               <li>
               <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Pages"
               data-nav-target="#dashboards">
                <i class="fa fa-file"></i> &nbsp; Manage Services
                </a>
                <ul> 
                    <li><a href="{{route('admin.Pages.Create')}}">Create </a></li>
                    <li><a href="{{route('admin.manage.pages')}}">Manage </a></li>
              </ul>
        </li>
     
        <li class="navigation-divider" style="margin: 0px; padding:20px 0px 0px 30px">Blogs</li>
         <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Blogs"
               data-nav-target="#dashboards">
                <i class="fa fa-newspaper-o"></i>&nbsp; Manage Blog</a>
                <ul>
                      <li><a href="{{route('admin.BlogsCreate')}}">Create </a></li>
                      <li><a href="{{route('admin.blogs.index')}}">Manage </a></li>
                </ul>
        </li>  
        
        
        
        <li class="navigation-divider" style="margin: 0px; padding:20px 0px 0px 30px">Settings</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Settings"
               data-nav-target="#dashboards">
                <i class="fa fa-globe"></i>&nbsp; Wesbite Settings</a>
                <ul>
                      <li><a href="{{route('admin.settings.index')}}">Manage Contents</a></li>
                </ul>
        </li> 
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Admin"
               data-nav-target="#dashboards">
                <i class="fa fa-users"></i>&nbsp; Manage Admin</a>
                <ul>
                      <li><a href="{{route('admin.userAccount')}}">Manage Admin</a></li>
                </ul>
        </li>  

         
        </ul>
    </div>
</div>