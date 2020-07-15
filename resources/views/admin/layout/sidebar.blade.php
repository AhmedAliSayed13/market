<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{active_link(['admin','dashboard'])}}">
                    <a href=""><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Brand </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{active_link(['admin','brand','create'])}}"><a href="{{route('brand.create')}}"> New Brand </a></li>
                        <li class="{{active_link(['admin','brand'])}}"><a href="{{route('brand.index')}}"> All Brands </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{active_link(['admin','category','create'])}}"><a href="{{route('category.create')}}"> New Category </a></li>
                        <li class="{{active_link(['admin','category'])}}"><a href="{{route('category.index')}}"> All Categories </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Tag </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{active_link(['admin','tag','create'])}}"><a href="{{route('tag.create')}}"> New Tag </a></li>
                        <li class="{{active_link(['admin','tag'])}}"><a href="{{route('tag.index')}}"> All Tags </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{active_link(['admin','product','create'])}}"><a href="{{route('product.create')}}"> New Product </a></li>
                        <li class="{{active_link(['admin','product'])}}"><a href="{{route('product.index')}}"> All Products </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
