<!doctype html>
@extends('MNG_layout.master')


<html class="no-js" lang="en">

<head>
        <title>Manager Dashboard</title>
</head>

<body>

{{-- @section('search')
@stop --}}
@section('indexcontent')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                {{-- <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/users/Hasib.jpg" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">S.M. HASIB <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/editprofile">Edit Profile</a>
                                <a class="dropdown-item" href="{{route('user.logout')}}">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="header-title">Content List</div>
                        <table class="table table-image">
                            <thead>
                                <tr>
                                    <td>Order Name</td>
                                    <td>Order Description</td>
                                    <td>Order template</td>
                                    <td>Order status</td>
                                    <td>Order Image</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>	
                            @foreach ($orderlist as $orderslist)
                            <tbody>					
                                <tr>
                                    <td>
                                        {{$orderslist['ordername']}}
                                    </td>
                                    <td>
                                        {{$orderslist['orderdescription']}}
                                        
                                    </span></td>
                                    <td>
                                    <td>
                                        {{$orderslist['orderstatus']}}
                                        
                                    </span></td>
                                    <td>
                                        {{$orderslist['template']}}
                                        
                                    </span></td>
                                    <td>
                                        
                                        {{-- <img  src="" alt="Sheep" width="100" height="100"></td> --}}
                                        <img  src="{{asset('assets/users/'.$orderslist['picture'])}}" alt="Sheep" width="100" height="100"></td>
                                        
                                    </span></td>
                                    {{-- <td><a href="/edit"><button type="button" class="btn btn-primary">Edit</button></a></td>
                                    <td><a href="/delete"><button type="button" class="btn btn-danger">Delete</button></a></td> --}}
                                    <td><a href="{{route('user.orderedit',$orderslist['orderid'])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                                    <td><a href="{{route('user.orderdelete',$orderslist['orderid'])}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                    <td><a href="{{route('user.orderapprove',$orderslist['orderid'])}}"><button type="button" class="btn btn-danger">Approve</button></a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="pagination_area pull-center mt-5">
                <ul>
                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
            <!-- page title area end -->
            {{-- <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Product Sold</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales4" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Gross Profit</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales5" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Orders</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales6" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">New Coustomers</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales7" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- visitor graph area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <h4 class="header-title mb-0">Visitor Graph</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                        <div id="visitor_graph"></div>
                    </div>
                </div>
                <!-- visitor graph area end -->
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Todays Order List</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Product Name</td>
                                        <td>Product Code</td>
                                        <td>Order Status</td>
                                        <td>Client Number</td>
                                        <td>Zip Code</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="shipment_dot">Shipment</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="confirmed _dot">Confirmed </span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- order list area end -->
                <div class="row">
                    <!-- product sold area start -->
                    <div class="col-xl-8 col-lg-7 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="header-title mb-0">Product Slod</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected="">Today</option>
                                        <option value="0">Last 7 Days</option>
                                    </select>
                                </div>
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tbody>
                                            <tr class="heading-td">
                                                <td>Product Name</td>
                                                <td>Revenue</td>
                                                <td>Sold</td>
                                                <td>Discount</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$160</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$26</td>
                                                <td>$500</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$26</td>
                                                <td>$500</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$250</td>
                                                <td>$10</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$125</td>
                                                <td>$50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination_area pull-right mt-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product sold area end -->
                    <!-- team member area start -->
                    <div class="col-xl-4 col-lg-5 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex flex-wrap justify-content-between mb-4 align-items-center">
                                    <h4 class="header-title mb-0">Team Member</h4>
                                    <form class="team-search">
                                        <input type="text" name="search" placeholder="Search Here">
                                    </form>
                                </div>
                                <div class="member-box">
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author1.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Amir Hamza</p><span>Manager</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author2.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Anamul Kabir</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author3.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Animesh Mondol</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author4.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Faruk Hasan</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author5.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Sagor Chandra</p><span>Motion Designer</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- team member area end -->
                </div>
            </div> --}}
        </div>
        <!-- main content area end -->
		
        
    </div>
    <!-- page container area end -->
	@endsection

	
	
    
   

    
</body>

</html>