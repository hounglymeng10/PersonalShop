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
                        <!-- Content Row -->
                        <div class="col">
            <div class="py-12">
                <div class="container contact-form">
                    <hr />
                    @if (session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <span class="fs-5">Edit Category</span>
                            <div class="form-group w-50">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $category->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>        
                        <div class="row d-flex">
                            <div class="col-lg-1 col-md-3" style="width: 100px">
                                <button class="btn btn-primary">Update</button>
                            </div>
                            <div class="col-lg-1 col-md-3" style="width: 100px">
                                <button class="btn btn-danger"><a class="text-decoration-none text-white" href="{{ route('admin.categories.index') }}">Cancel</a></button>
                            </div>
                        </div>
                    </form>
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
    