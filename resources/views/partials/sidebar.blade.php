<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Application</span>
                </li>
                @role('manager')

                This is user role

                @endrole

                @role('admin')

                This is admin role

                @endrole
                @foreach (['user' => "User", 'transaction' => "Transaction", 'role' => "Role", 'permission' =>
                "Permission"] as $key => $item)
                <li class="{{ @request()->routeIs(''.$key.'.*') ? 'active' : '' }}">
                    <a href="{{ route(''.$key.'.index') }}"><i class="feather-list"></i><span>{{ __(''.$item.'')
                            }}</span></a>
                </li>
                @endforeach
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="feather-align-left"></i><span>Multi Level</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
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
                </li> --}}
            </ul>
        </div>
    </div>
</div>
