<aside id="left-panel">
    <nav>
        <ul>
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">User</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.user.index') }}">
                        <a href="/admin/user" title="List"><span class="menu-item-parent">List</span></a>
                    </li>                    
                    <li class="{{ Menu::isActive('admin.user.create') }} {{ Menu::isActive('admin.user.edit') }}">
                        <a href="/admin/user/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>

                </ul>
            </li>            
            
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Projects</span></a>
                <ul>
                   <li class="{{ Menu::isActive('admin.projects.index') }}">
                            <a href="/admin/projects/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="{{ Menu::isActive('admin.projects.create') }} {{ Menu::isActive('admin.projects.edit') }}">
                        <a href="/admin/projects/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>
                
                </ul>
            </li>

            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Service</span></a>
                <ul>
                   <li class="{{ Menu::isActive('admin.service.index') }}">
                            <a href="/admin/service/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="{{ Menu::isActive('admin.service.create') }} {{ Menu::isActive('admin.service.edit') }}">
                        <a href="/admin/service/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>
                
                </ul>
            </li>

            
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">menu</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.menu.index') }}">
                        <a href="/admin/menu/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="{{ Menu::isActive('admin.menu.create') }} {{ Menu::isActive('admin.menu.edit') }}">
                        <a href="/admin/menu/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>        

                    <li class="">
                        <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">pages</span></a>
                        <ul>
                            <li class="{{ Menu::isActive('admin.pages.index') }}">
                                <a href="/admin/pages/" title="List"><span class="menu-item-parent">List</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.pages.create') }} {{ Menu::isActive('admin.pages.edit') }}">
                                <a href="/admin/pages/create" title="List"><span class="menu-item-parent">Create</span></a>
                            </li>
                        </ul>
                    </li> 
                    <li class="{{ Menu::isActive('admin.images.add') }}">
                        <a href="/admin/images" title="List"><span class="menu-item-parent">Images</span></a>
                    </li>
                </ul>
            </li> 
        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>
</aside>