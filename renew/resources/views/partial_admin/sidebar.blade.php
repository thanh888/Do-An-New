<!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="{{asset('backend/dashboard/assets/img/client-img4.png')}}" alt="" class="rounded-circle" />
                        <p><strong>{{ auth()->user() ? auth()->user()->name : '' }}</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                </ul>
                            </li>
                            </li>
                           
                            <li class="parent">
                                <a href="{{route('AdminTable.index')}}" class=""><i class="fa fa-table mr-3"></i>
                                     <span class="none"> Đơn đặt bàn </span>
                                 </a>
                             </li>
                          
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('order'); return false" class=""><i class="fa fa-table mr-3"></i>
                                    <span class="none">Quản lý đơn đặt hàng<i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="order">
                                    <li class="child"><a href="{{route('order.index')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Đơn đặt hàng</a></li>
                                    <li class="child"><a href="{{route('order.listsuccess')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Đơn thành công</a></li>
                                    <li class="child"><a href="{{route('order.listdestroy')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Đơn bị hủy</a></li>
                                    {{-- <li class="child"><a href="{{ route('Permission.create') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh sach chuc nang</a></li> --}}
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">Quan ly <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    @can('category-list')
                                        <li class="child"><a href="{{ route('Category.index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh muc san pham</a></li>
                                        
                                    @endcan
                                    @can('product-list')
                                        <li class="child"><a href="{{ route('Product.index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh sach san pham</a></li>
                                        
                                    @endcan
                                        
                                    <li class="child"><a href="{{ route('AdminPosts.index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Tiêu đề</a></li>
                                    @can('user-list')
                                        
                                    <li class="child"><a href="{{ route('User.index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh sach nguoi dung</a></li>
                                    @endcan
                                    @can('role-list')
                                        
                                    <li class="child"><a href="{{ route('Role.index') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh sach vai tro </a></li>
                                    @endcan
                                    @can('permission-list')
                                        
                                    <li class="child"><a href="{{ route('Permission.create') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Danh sach chuc nang</a></li>
                                    @endcan
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="{{ route('AdminContact.index') }}" class=""><i class="fa fa-comment-o mr-3"> </i>
                                    <span class="none">Phản hồi từ khách hàng </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
