@extends('layouts.management.master')

@section('content')
               <div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-purple">25140</span>
                        Total Sales
                    </div>
                    <div class="clearfix"></div>
                    <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-blue-grey">65241</span>
                        New Orders
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-brown">85412</span>
                        New Users
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-teal">20544</span>
                        Unique Visitors
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-30 header-title">Latest Transactions</h4>
                        <div class="table-responsive">
                            <table class="table table-vertical">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-2.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                            Herbert C. Patton
                                        </td>
                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                        <td>
                                            $14,584
                                            <p class="m-0 text-muted font-14">Amount</p>
                                        </td>
                                        <td>
                                            5/12/2016
                                            <p class="m-0 text-muted font-14">Date</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-3.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                            Mathias N. Klausen
                                        </td>
                                        <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                        <td>
                                            $8,541
                                            <p class="m-0 text-muted font-14">Amount</p>
                                        </td>
                                        <td>
                                            10/11/2016
                                            <p class="m-0 text-muted font-14">Date</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                            Nikolaj S. Henriksen
                                        </td>
                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                        <td>
                                            $954
                                            <p class="m-0 text-muted font-14">Amount</p>
                                        </td>
                                        <td>
                                            8/11/2016
                                            <p class="m-0 text-muted font-14">Date</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-5.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                            Lasse C. Overgaard
                                        </td>
                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                        <td>
                                            $44,584
                                            <p class="m-0 text-muted font-14">Amount</p>
                                        </td>
                                        <td>
                                            7/11/2016
                                            <p class="m-0 text-muted font-14">Date</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/avatar-6.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                            Kasper S. Jessen
                                        </td>
                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                        <td>
                                            $8,844
                                            <p class="m-0 text-muted font-14">Amount</p>
                                        </td>
                                        <td>
                                            1/11/2016
                                            <p class="m-0 text-muted font-14">Date</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-vertical mb-1">
                                <tbody>
                                    <tr>
                                        <td>#12354781</td>
                                        <td>
                                            <img src="assets/images/products/1.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                            Riverston Glass Chair
                                        </td>
                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                        <td>
                                            $185
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#52140300</td>
                                        <td>
                                            <img src="assets/images/products/2.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                            Shine Company Catalina
                                        </td>
                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                        <td>
                                            $1,024
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#96254137</td>
                                        <td>
                                            <img src="assets/images/products/3.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                            Trex Outdoor Furniture Cape
                                        </td>
                                        <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                        <td>
                                            $657
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#12365474</td>
                                        <td>
                                            <img src="assets/images/products/4.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                            Oasis Bathroom Teak Corner
                                        </td>
                                        <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                        <td>
                                            $8451
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#85214796</td>
                                        <td>
                                            <img src="assets/images/products/5.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                            BeoPlay Speaker
                                        </td>
                                        <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                        <td>
                                            $584
                                        </td>
                                        <td>
                                            5/12/2016
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</div> <!-- Page content Wrapper -->



@endsection
@section('script')
<script src="{{ url('') }}/assets/plugins/peity-chart/jquery.peity.min.js"></script>
    <!--C3 Chart-->
    <script type="{{ url('') }}/text/javascript" src="assets/plugins/d3/d3.min.js"></script>
    <script type="{{ url('') }}/text/javascript" src="assets/plugins/c3/c3.min.js"></script>
    <!-- KNOB JS -->
    <script src="{{ url('') }}/assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="{{ url('') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
    <!-- Page specific js -->
    <script src="{{ url('') }}/assets/pages/dashboard.js"></script>
@endsection