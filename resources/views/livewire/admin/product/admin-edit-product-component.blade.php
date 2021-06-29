<main>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/product" class="nav-link">Product</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="{{ asset('img/logo-title.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">eShop</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/profil.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>
            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin/dashboard" class="nav-link">
                            <i class="nav-icon fa fa-user-circle"></i>
                            <p>
                                Author
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/categories" class="nav-link">
                            <i class="nav-icon fa fa-th-large"></i>
                            <p>
                                Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/products" class="nav-link active">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/contact" class="nav-link">
                            <i class="nav-icon fa fa-phone-square"></i>
                            <p>
                                Contact
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.user')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.products')}}">Product</a>
                            </li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="row" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control input-md" placeholder="Product Name"
                                        wire:model="name" wire:keyup="generateSlug">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Product Slug</label>
                                    <input type="text" class="form-control input-md" placeholder="Product Slug"
                                        wire:model="slug">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" placeholder="Short Description"
                                        wire:model="short_description"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" placeholder="Description"
                                        wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Regular Price</label>
                                    <input type="text" class="form-control input-md" placeholder="Regular Price"
                                        wire:model="regular_price">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Sale Price</label>
                                    <input type="text" class="form-control input-md" placeholder="Sale Price"
                                        wire:model="sale_price">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Stock</label>
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="">Select Stock Status</option>
                                        <option value="Kosong">Kosong</option>
                                        <option value="Tersedia">Tersedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group" wire:model="featured">
                                    <label>Featured</label>
                                    <select class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input-md" placeholder="Quantity"
                                        wire:model="quantity">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <br>
                                    <input type="file" class="input-file" wire:model="newimage">
                                    <br>
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120">
                                    @else
                                    <img src="{{asset('img/produk')}}/{{$image}}" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('admin.products') }}" class="m-1 btn btn-outline-danger">Back</a>
                                    <button type="submit" class="m-1 btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </section>
    </div>
</main>
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>