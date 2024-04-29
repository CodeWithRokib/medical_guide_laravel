<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                        <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->
                    @php
                        $prefix=Request::route()->getPrefix();
                        $route=Route::current()->getName();
                        $permission_keys=[];

                        foreach (\Illuminate\Support\Facades\Auth::user()->roles as $role){
                            foreach ($role->permissions as $permission){
                                array_push($permission_keys,url('/').'/'.$permission->permission_key);
                            }
                        }

                    @endphp
                    @if(Auth::user()->role_id != \App\Enums\RoleType::USER)
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header">Navigation</li>
                        <!--Menu list item-->
                        <li class="{{($route=='home')? 'active-sub active':''}}">
                            <a href="{{url('/home')}}"><i class="demo-pli-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        @if(in_array(route('user.create'),$permission_keys) or in_array(route('role.view'),$permission_keys))
                        <!-- User Management START-->
                        {{-- <li  class="{{($prefix=='/UserManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="menu-title">User Management</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                @if(in_array(route('user.create'),$permission_keys))
                                <li class="">
                                    <a href="{{route('user.create')}}"><i class="fa fa-user-circle"></i>Users</a>
                                </li>
                                @endif

                                @if(in_array(route('role.view'),$permission_keys))
                                <li class="">
                                    <a href="{{route('role.view')}}"><i class="fa fa-user-circle"></i>Roles</a>
                                </li>
                                @endif
                            </ul>
                        </li> --}}
                        <!-- User Management END -->
                        @endif

                        {{-- <li  class="">
                            <a href="#">
                                <i class="fa fa-user-secret"></i>
                                <span class="menu-title">Corporate Program</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li class=""> <a href="{{route('blog.add')}}"><i class="ion-merge"></i> Add-Corporate Client </a> </li>
                            </ul>
                        </li> --}}


                        @if(in_array(route('company.add'),$permission_keys))
                        {{-- Company --}}
                        <li  class="{{($prefix=='/CompanyManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-ioxhost"></i>
                                <span class="menu-title">Company/Brand Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('company.add')}}"><i class="ion-merge"></i> Add / View Brand/Company</a>
                                </li>

                            </ul>
                        </li>
                        @endif

                        {{-- @if(in_array(route('supplier.add'),$permission_keys))
                        <li  class="{{($prefix=='/SupplierManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-user-secret"></i>
                                <span class="menu-title">Supplier Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('supplier.add')}}"><i class="ion-merge"></i> Add / View Supplier</a>
                                </li>

                            </ul>
                        </li>
                        @endif --}}



                        {{-- @if(in_array(route('attendance.show'),$permission_keys))
                            <li  class="{{($prefix=='/Attendance')? 'active-sub active':''}}">
                                <a href="#">
                                    <i class="fa fa-user-secret"></i>
                                    <span class="menu-title">Attendance Management</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="">
                                        <a href="{{route('attendance.show')}}"><i class="ion-merge"></i> Browse Attendance</a>
                                    </li>

                                </ul>
                            </li>
                        @endif --}}

                        <!--Customer Management Start -->
                        {{--@if(in_array(route('applier.add'),$permission_keys))--}}
                        {{-- <li  class="{{($prefix=='/CustomerManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="menu-title">Customer Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('applier.add')}}"><i class="fa fa-user-circle"></i>Add / View Customer</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{--@endif--}}
                        <!--Customer Management End -->

                        @if(in_array(route('product.add'),$permission_keys) or in_array(route('otherproduct.add'),$permission_keys))
                        {{-- Vaccine Setup --}}
                        <li  class="{{($prefix=='/ProductManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-heartbeat"></i>
                                <span class="menu-title">Health Profile</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('product.add'),$permission_keys))
                                        <a href="{{route('health.index')}}"><i class="ion-merge"></i> Health Profile </a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        @endif


                        @if(in_array(route('product.add'),$permission_keys) or in_array(route('otherproduct.add'),$permission_keys))
                        {{-- Vaccine Setup --}}
                        <li  class="{{($prefix=='/ProductManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-heartbeat"></i>
                                <span class="menu-title">Health Tracker</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class=""><a href="{{route('health.tracker')}}"><i class="ion-merge"></i> Health Tracker</a></li>
                                <li class=""><a href="{{route('health.tracker.report')}}"><i class="ion-merge"></i> Reports </a></li>
                            </ul>
                        </li>
                        @endif

                        @if(in_array(route('product.add'),$permission_keys) or in_array(route('otherproduct.add'),$permission_keys))
                        {{-- Vaccine Setup --}}
                        <li  class="{{($prefix=='/ProductManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-heartbeat"></i>
                                <span class="menu-title">Product Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('product.add'),$permission_keys))
                                        <a href="{{route('product.add')}}"><i class="ion-merge"></i> Add / View Vaccines</a>
                                    @endif
                                    @if(in_array(route('otherproduct.add'),$permission_keys))
                                        <a href="{{route('otherproduct.add')}}"><i class="ion-merge"></i> Add / View Health Products</a>
                                    @endif
                                      @if(in_array(route('product.add'),$permission_keys))
                                        <a href="{{route('product.order.list')}}"><i class="ion-merge"></i>Vaccine Order </a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        @endif


                        {{-- <li  class="{{($prefix=='/DieseasManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-superpowers"></i>
                                <span class="menu-title">Dose Management</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('dieseas.duration')}}"><i class="ion-merge"></i> Add Dieseas Does Duration</a>
                                </li>

                            </ul>
                        </li> --}}


                        {{-- Vaccine Setup --}}

                        {{-- @if(in_array(route('purchase.add'),$permission_keys) or in_array(route('purchase.view'),$permission_keys) or in_array(route('otherpurchase.add'),$permission_keys) or in_array(route('otherpurchase.view'),$permission_keys))
                        <li  class="{{($prefix=='/PurchaseManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-cart-plus"></i>
                                <span class="menu-title">Purchase Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('purchase.add'),$permission_keys))
                                        <a href="{{route('purchase.add')}}"><i class="ion-merge"></i> New Vaccine Purchase</a>
                                    @endif
                                    @if(in_array(route('purchase.view'),$permission_keys))
                                        <a href="{{route('purchase.view')}}"><i class="ion-merge"></i>  View Vaccine Purchase</a>
                                    @endif
                                    @if(in_array(route('otherpurchase.add'),$permission_keys))
                                        <a href="{{route('otherpurchase.add')}}"><i class="ion-merge"></i> New Health-Product Purchase</a>
                                    @endif
                                    @if(in_array(route('otherpurchase.view'),$permission_keys))
                                        <a href="{{route('otherpurchase.view')}}"><i class="ion-merge"></i>  View Health-Product Purchase</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        @endif --}}

                        {{-- @if(in_array(route('vaccine.apply'),$permission_keys) or in_array(route('sell.other.product'),$permission_keys) or in_array(route('patient.view'),$permission_keys) or in_array(route('patient.vaccinehistory'),$permission_keys))
                            <li  class="{{($prefix=='/PatientManagement')? 'active-sub active':''}}">
                                <a href="#">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="menu-title"> Sale Management</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="">
                                        @if(in_array(route('vaccine.apply'),$permission_keys))
                                            <a href="{{route('vaccine.apply')}}"><i class="ion-merge"></i> Sale Vaccine</a>
                                        @endif
                                        @if(in_array(route('sell.bulk.vaccine'),$permission_keys))
                                            <a href="{{route('sell.bulk.vaccine')}}"><i class="ion-merge"></i> Bulk Vaccine Sale</a>
                                            @endif
                                        @if(in_array(route('sell.other.product'),$permission_keys))
                                            <a href="{{route('sell.other.product')}}"><i class="ion-merge"></i> Sale Health Products</a>
                                        @endif
                                        <!----@if(in_array(route('patient.view'),$permission_keys))-->
                                        <!----<a href="{{route('patient.view')}}"><i class="ion-merge"></i> View All Customer's</a>-->
                                        <!----@endif-->

                                    </li>
                                </ul>
                            </li>

                        @endif --}}

                        {{-- @if(in_array(route('vaccinestock.view'),$permission_keys))
                        <li  class="{{($prefix=='/StockManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span class="menu-title">Stock Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('vaccinestock.view')}}"><i class="ion-merge"></i>Stock</a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}



                        {{-- @if(in_array(route('vaccine.transfer'),$permission_keys) or in_array(route('vaccine.transfer.history'),$permission_keys))
                        <li  class="{{($prefix=='/TransferManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="menu-title">Transfer Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                @if(in_array(route('vaccine.transfer'),$permission_keys))
                                <a href="{{route('vaccine.transfer')}}"><i class="ion-merge"></i> Product Transfer</a>
                                @endif
                                </li>
                            </ul>
                            <ul class="collapse">
                                <li class="">
                                @if(in_array(route('vaccine.transfer.history'),$permission_keys))
                                    <a href="{{route('vaccine.transfer.history')}}"><i class="ion-merge"></i> Product Transfer History</a>
                                @endif
                                </li>
                            </ul>
                        </li>
                        @endif --}}



                        {{-- @if(in_array(route('invoice.vaccineinovice'),$permission_keys) or in_array(route('invoice.dueinvoice'),$permission_keys) or in_array(route('invoice.money'),$permission_keys))
                        <li  class="{{($prefix=='/InvoiceManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">Invoice Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('invoice.vaccineinovice'),$permission_keys))
                                        <a href="{{route('invoice.vaccineinovice')}}"><i class="ion-merge"></i>Sale/Purchase Invoices</a>
                                    @endif
                                    @if(in_array(route('invoice.dueinvoice'),$permission_keys))
                                        <a href="{{route('invoice.dueinvoice')}}"><i class="ion-merge"></i>All Dues</a>
                                    @endif
                                    @if(in_array(route('invoice.money'),$permission_keys))
                                        <a href="{{route('invoice.money')}}"><i class="ion-merge"></i>All Money Receipt</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        @endif --}}


                        {{-- @if(in_array(route('wish.view'),$permission_keys))
                            <li  class="">
                                <a href="#">
                                    <i class="fa fa-money"></i>
                                    <span class="menu-title">Cart Item Management</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="">
                                        <a href="{{route('wish.view')}}"><i class="ion-merge"></i>View Cart</a>
                                    </li>
                                </ul>
                            </li>
                        @endif --}}

                        {{-- @if(in_array(route('expense.add'),$permission_keys) or in_array(route('daily-expenses.add'),$permission_keys))
                        <li  class="{{($prefix=='/ExpenseManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">Expense Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('expense.add'),$permission_keys))
                                        <a href="{{route('expense.add')}}"><i class="ion-merge"></i>Add / View Expense Category</a>
                                    @endif
                                    @if(in_array(route('daily-expenses.add'),$permission_keys))
                                        <a href="{{route('daily-expenses.add')}}"><i class="ion-merge"></i>Add Expense</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        @endif --}}


                        {{-- @if(in_array(route('report.purchase'),$permission_keys) or in_array(route('report.customersupplier'),$permission_keys) or in_array(route('report.profit'),$permission_keys) or in_array(route('daily.report.profit'),$permission_keys) or in_array(route('report.expenses'),$permission_keys))
                        <li  class="{{($prefix=='/ReportManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">All Report</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <!--<a href="{{route('report.sale')}}"><i class="ion-merge"></i> Sold Report</a>-->
                                    <!--<a href="{{route('report')}}"><i class="ion-merge"></i>Individual Product Report</a>-->
                                    <!--<a href="{{route('report.topproduct')}}"><i class="ion-merge"></i> Top Product Report</a>-->
                                    <!--<a href="{{route('report.prductsellpurchase')}}"><i class="ion-merge"></i> Individual Product Sale / Purchase Report</a>-->
                                    @if(in_array(route('report.purchase'),$permission_keys))
                                        <a href="{{route('report.purchase')}}"><i class="ion-merge"></i> Sale / Purchase Report</a>
                                    @endif
                                    @if(in_array(route('report.customersupplier'),$permission_keys))
                                        <a href="{{route('report.customersupplier')}}"><i class="ion-merge"></i> Customer / Supplier Report</a>
                                    @endif
                                    @if(in_array(route('report.profit'),$permission_keys))
                                        <a href="{{route('report.profit')}}"><i class="ion-merge"></i> Profit Report</a>
                                    @endif
                                    @if(in_array(route('daily.report.profit'),$permission_keys))
                                        <a href="{{route('daily.report.profit')}}"><i class="ion-merge"></i> Daily Profit / Loss Report</a>
                                    @endif
                                    @if(in_array(route('report.expenses'),$permission_keys))
                                        <a href="{{route('report.expenses')}}"><i class="ion-merge"></i>Expanse Report</a>
                                    @endif
                                    <!--<a href="{{route('income.statement')}}"><i class="ion-merge"></i> Income Statement</a>-->
                                </li>
                            </ul>
                        </li>
                        @endif --}}


                        @if(in_array(route('hospital.add'),$permission_keys))
                        <li  class="{{($prefix=='/HospitalManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-hospital-o"></i>
                                <span class="menu-title">Hospital Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('hospital.add')}}"><i class="ion-merge"></i> Add / View Hospital</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(in_array(route('specialist.add'),$permission_keys) or in_array(route('doctor.add'),$permission_keys))

                        <li  class="{{($prefix=='/DoctorManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-user-md"></i>
                                <span class="menu-title">Doctor Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    @if(in_array(route('specialist.add'),$permission_keys))
                                    <a href="{{route('specialist.add')}}"><i class="ion-merge"></i> Specialist In</a>
                                    @endif
                                    @if(in_array(route('doctor.add'),$permission_keys))
                                    <a href="{{route('doctor.add')}}"><i class="ion-merge"></i> Add / View Doctor</a>
                                    @endif
                                    @if(in_array(route('doctor.add'),$permission_keys))
                                    <a href="{{route('doctor.slot.index')}}"><i class="ion-merge"></i> Add / View Slot</a>
                                    @endif
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(in_array(route('division.add'),$permission_keys))
                        <li  class="{{($prefix=='/DivisionManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-yelp"></i>
                                <span class="menu-title">Division Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('division.add')}}"><i class="ion-merge"></i> Add/View Division</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li  class="">
                            <a href="#">
                                <i class="fa fa-yelp"></i>
                                <span class="menu-title">Area Management</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('policestation.add')}}"><i class="ion-merge"></i> Add/View Policestation</a>
                                </li>
                                <li class="">
                                    <a href="{{route('area.add')}}"><i class="ion-merge"></i> Add/View Area</a>
                                </li>
                            </ul>
                        </li>
                        {{--@if(in_array(route('bank.add'),$permission_keys) or in_array(route('bank.view'),$permission_keys))--}}
                        <li  class="{{($prefix=='/BloodBankManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-yelp"></i>
                                <span class="menu-title">Blood Bank Manag.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    {{--@if(in_array(route('bank.add'),$permission_keys))--}}
                                     <a href="{{route('bank.add')}}"><i class="ion-merge"></i> Add New B.Bank</a>
                                    {{--@endif--}}
                                    {{--@if(in_array(route('bank.view'),$permission_keys))--}}
                                     <a href="{{route('bank.view')}}"><i class="ion-merge"></i> View Blood Bank</a>
                                    {{--@endif--}}
                                </li>
                            </ul>
                        </li>
                        {{--@endif--}}

                        @if(in_array(route('ambulance.add'),$permission_keys))
                        <li  class="{{($prefix=='/AmbulanceManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-ambulance"></i>
                                <span class="menu-title">Ambulance Manag.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('ambulance.add')}}"><i class="ion-merge"></i> Add / View Ambulance</a>`
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if(in_array(route('ambulance.add'),$permission_keys))
                        <li  class="">
                            <a href="#">
                                <i class="fa fa-ambulance"></i>
                                <span class="menu-title">Virtual Lab Manag.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('virtuallab.add')}}"><i class="ion-merge"></i> Add / View Virtual Lab</a>`
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if(in_array(route('ambulance.add'),$permission_keys))
                        <li  class="">
                            <a href="#">
                                <i class="fa fa-ambulance"></i>
                                <span class="menu-title">Overseas Treatment Manag.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                {{-- <li class="">
                                    <a href="{{route('overseastreatment.add')}}"><i class="ion-merge"></i> Add / Overseas Treatment</a>`
                                </li> --}}
                                <li class="">
                                    <a href="{{route('overseastreatment')}}"><i class="ion-merge"></i>Overseas Treatment</a>`
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if(in_array(route('ambulance.add'),$permission_keys))
                        <li  class="">
                            <a href="#">
                                <i class="fa fa-ambulance"></i>
                                <span class="menu-title">Health Tips</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('healthtips.add')}}"><i class="ion-merge"></i> Add / Health Tips</a>`
                                </li>
                            </ul>
                        </li>
                        @endif

                        {{-- <li  class="{{($prefix=='/WarehouseManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-eercast"></i>
                                <span class="menu-title">Warehouse Manage.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('warehouse.add')}}"><i class="ion-merge"></i> Add / View Warehouse</a>

                                </li>
                            </ul>
                        </li> --}}



                        <li  class="{{($prefix=='/WebsiteManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span class="menu-title">Website Manag.</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a href="{{route('website.service')}}"><i class="ion-merge"></i> Add/View Services</a>
                                    {{-- <a href="{{route('homepage.add')}}"><i class="ion-merge"></i> Home Page Dynamic</a> --}}
                                    <a href="{{route('website.aboutus')}}"><i class="ion-merge"></i> Add/View About Us</a>
                                    <a href="{{route('website.contactus')}}"><i class="ion-merge"></i> Add/View Contact Us</a>
                                    <a href="{{ route('banner.add') }}"> <i class="ion-merge"></i> &nbsp; Add Pages Banner image</a>
                                    <a href="{{ route('banner.add') }}"> <i class="ion-merge"></i> &nbsp; Add Pages Banner image</a>
                                </li>
                            </ul>
                        </li>



                        {{--<li  class="{{($prefix=='/ConsultManagement')? 'active-sub active':''}}">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-globe"></i>--}}
                                {{--<span class="menu-title">Consult Manag.</span>--}}
                                {{--<i class="arrow"></i>--}}
                            {{--</a>--}}
                            {{--<!--Submenu-->--}}
                            {{--<ul class="collapse">--}}
                                {{--<li class="">--}}
                                    {{--<a href="{{route('consults.view')}}"><i class="ion-merge"></i> View Consults</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                    @else
                    <ul id="mainnav-menu" class="list-group">
                        <li  class="{{($prefix=='/ProductManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-heartbeat"></i>
                                <span class="menu-title">Health Profile</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                        <a href="{{route('health.index')}}"><i class="ion-merge"></i> Health Profile </a>
                                </li>
                            </ul>
                        </li>
                        <li  class="{{($prefix=='/ProductManagement')? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-heartbeat"></i>
                                <span class="menu-title">Health Tracker</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                        <a href="{{route('health.tracker')}}"><i class="ion-merge"></i> Health Tracker </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @endif

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
