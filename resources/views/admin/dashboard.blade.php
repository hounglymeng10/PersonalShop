<x-app-layout>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

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
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Sale Operation Dashboard</h1>
                            <a href="{{ route('admin.revenue.form') }}" class="btn" style="background-color: #5b6f27; color: white;">Sale Revenue</a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                    Total Customer</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUsers }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                    Pending order</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ $pendingOrdersCount }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-clock fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                    Total Sale</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    ${{ $totalApprovedOrdersPrice }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header d-flex flex-row align-items-center">
                                        <h6 class="m-0 font-weight-bold text-secondary">Order by Period</h6>
                                        <div class="ml-auto">
                                            <select id="periodSelect" class="form-control" style="width: 100px;">
                                                <option value="week">Weekly</option>
                                                <option value="month">Monthly</option>
                                                <option value="year">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class=" mt-3">
                                                    <div class="row">
                                                        <div id="chartContainer" class="pb-3">
                                                            <div id="weekChart">
                                                                <h6 class="m-0 font-weight-bold text-secondary">Weekly
                                                                </h6>
                                                                <canvas id="ordersByWeekChart" width="400"
                                                                    height="200"></canvas>
                                                            </div>
                                                            <div id="monthChart" style="display: none;">
                                                                <h6 class="m-0 font-weight-bold text-secondary">Monthly
                                                                </h6>
                                                                <canvas id="ordersByMonthChart" width="400"
                                                                    height="200"></canvas>
                                                            </div>
                                                            <div id="yearChart" style="display: none;">
                                                                <h6 class="m-0 font-weight-bold text-secondary">Yearly
                                                                </h6>
                                                                <canvas id="ordersByYearChart" width="400"
                                                                    height="200"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-secondary">Top Products</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-3 pb-2 ms-1">
                                            <canvas id="orderTrendsByProductChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-secondary">Top Category
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-3 pb-2 ms-1">
                                            <canvas id="orderTrendsByCategoryChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
    </body>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

        <script>
            function sortOrdersByYearAndWeek(orders) {
                return orders.sort((a, b) => {
                    if (a.year === b.year) {
                        return a.week - b.week;
                    }
                    return a.year - b.year;
                });
            }

            
            // Sort the totalOrdersByWeek and totalOrdersByMonth data
            var sortedTotalOrdersByWeek = sortOrdersByYearAndWeek(@json($totalOrdersByWeek));
            var sortedTotalOrdersByMonth = sortOrdersByYearAndWeek(@json($totalOrdersByMonth));
            var sortedTotalOrdersByYear = @json($totalOrdersByYear);

            var ordersByWeekChart = new Chart(document.getElementById('ordersByWeekChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: sortedTotalOrdersByWeek.map(order => `${order.year}-W${order.week}`),
                    datasets: [{
                        label: 'Total Orders',
                        data: sortedTotalOrdersByWeek.map(order => order.total_orders),
                        backgroundColor: 'rgba(53, 68, 78, 0.2)',
                        borderColor: '#5b6f27',
                        borderWidth: 1,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var ordersByMonthChart = new Chart(document.getElementById('ordersByMonthChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: sortedTotalOrdersByMonth.map(order => `${order.year}-${order.month}`),
                    datasets: [{
                        label: 'Total Orders',
                        data: sortedTotalOrdersByMonth.map(order => order.total_orders),
                        backgroundColor: '#5b6f27',
                        borderColor: '#1d1d1d',
                        borderWidth: 1,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var ordersByYearChart = new Chart(document.getElementById('ordersByYearChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: sortedTotalOrdersByYear.map(order => `${order.year}`),
                    datasets: [{
                        label: 'Total Orders',
                        data: sortedTotalOrdersByYear.map(order => order.total_orders),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Update to Bar Chart for Order Trends by Product
            var orderTrendsByProductChart = new Chart(document.getElementById('orderTrendsByProductChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: [
                        @foreach ($orderTrendsByProduct as $item)
                            '{{ $item->product->title }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Total Orders',
                        data: [
                            @foreach ($orderTrendsByProduct as $item)
                                {{ $item->total_orders }},
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Total Orders'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Products'
                            }
                        }
                    },
                    plugins: {
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            formatter: (value) => {
                                return value;
                            },
                            color: '#000',
                        }
                    }
                }
            });

            // Update to Bar Chart for Order Trends by Category
            var orderTrendsByCategoryChart = new Chart(document.getElementById('orderTrendsByCategoryChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: [
                        @foreach ($orderTrendsByCategory as $item)
                            '{{ $item->category_name }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Total Orders',
                        data: [
                            @foreach ($orderTrendsByCategory as $item)
                                {{ $item->total_orders }},
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Total Orders'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Categories'
                            }
                        }
                    },
                    plugins: {
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            formatter: (value) => {
                                return value;
                            },
                            color: '#000',
                        }
                    }
                }
            });

            

                document.getElementById('periodSelect').addEventListener('change', function() {
                var period = this.value;
                document.getElementById('weekChart').style.display = (period === 'week') ? 'block' : 'none';
                document.getElementById('monthChart').style.display = (period === 'month') ? 'block' : 'none';
                document.getElementById('yearChart').style.display = (period === 'year') ? 'block' : 'none';
                
            });
        </script>

</x-app-layout>
