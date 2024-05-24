<x-app-layout>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            @include('admin.sidebar')
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include('admin.topbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Content Row -->
                        <div class="col">
                            <div class="py-12">
                                <div class="container-xl">
                                    <div class="table-responsive">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <h2>Order <b>Management</b></h2>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr />
                                            @if (Session::has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Order No.</th>
                                                        <th>Image</th>
                                                        <th>Remark</th>
                                                        <th>Food name</th>
                                                        <th>Total Price</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                        <th>Customer</th>
                                                        <th>Time</th>
                                                        <th>Paid</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>{{ $order->order_number }}</td>
                                                            <td><img src="{{ asset('images/' . $order->product->image) }}" alt="" style="width: 120px; height: 80px;"></td>
                                                            <td>{{ $order->special_request }}</td>
                                                            <td>{{ $order->product->title }}</td>
                                                            <td>{{ $order->total_price }}</td>
                                                            <td>{{ $order->quantity }}</td>
                                                            <td>{{ $order->status }}</td>
                                                            <td>{{ $order->user->name }}</td>
                                                            <td>{{ $order->created_at }}</td>
                                                            <td>{{ $order->payment_method }}</td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->
                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

    </body>

    </html>
</x-app-layout>
