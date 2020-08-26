<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                
                <li class="has_sub">
                    <a href="{{route('dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                 <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Administration </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.index')}}">Users</a></li>
                        
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> User Rules </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/roles')}}">Manage User Rules</a></li>
                        
                    </ul>
                </li>

                

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Home Page </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       {{--  <li><a href="{{route('product_category.index')}}">Product Category</a></li> --}}
                        <li class="has_sub">
                            <a href="{{route('section.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Banner Section </span> </a>
                        </li>
                        <li class="has_sub">
                            <a href="{{route('sectiontwo.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>  Section Two </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('sectionevent.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Event Section  </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('sectionshop.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Shop Section  </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('sectionvoice.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Voice Section  </span> </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> COMMUNITY </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       

                        <li class="has_sub">
                            <a href="{{route('gallery.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Gallery </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('blogcategory.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Category </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('community.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Create </span> </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Content </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       

                        

                        <li class="has_sub">
                            <a href="{{route('artcategory.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Art  Category</span> </a>
                        </li>
                        

                        <li class="has_sub">
                            <a href="{{route('art.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Art </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('community.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Podcast </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('video.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Video </span> </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> LIBRARY </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       

                        

                        <li class="has_sub">
                            <a href="{{route('librarycategory.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> LIBRARY Category </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('library.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> LIBRARY Blog </span> </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span>  About Us </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       

                        

                        <li class="has_sub">
                            <a href="{{route('aboutus.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> About Us </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('mission.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Mission </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('history.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> History </span> </a>
                        </li>

                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Contact </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       

                        

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Subscribe </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Join The Team </span> </a>
                        </li>

                        

                        
                    </ul>
                </li>

                
               

                

                <li class="has_sub">
                    <a href="{{route('story.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Story </span> </a>
                </li>

                <li class="has_sub">
                    <a href="{{route('news.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> News </span> </a>
                </li>

                <li class="has_sub">
                    <a href="{{route('blog.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Blog </span> </a>
                </li>

                <li class="has_sub">
                    <a href="{{route('event.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Event </span> </a>
                </li>

                

                <li class="has_sub">
                    <a href="{{route('team.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Team </span> </a>
                </li>

                

                
                

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> E-comarce </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                         <li><a href="{{route('product_category.index')}}">Product Category</a></li> 
                        <li><a href="{{route('product.index')}}">Product</a></li>
                        <li><a href="{{route('product.index')}}">Orders</a></li>
                        <li><a href="{{route('product.index')}}">Prescription</a></li>
                        <li><a href="{{route('product.index')}}">Reports</a></li>
                        
                    </ul>
                </li>

                
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Contact Us </span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/subscriber')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>
Subscribe </span> </a>
                </li>

            
                
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>