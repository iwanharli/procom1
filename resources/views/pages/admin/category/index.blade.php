@extends('layouts.admin')

@section('title')
    Kategori
@endsection

@section('container')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="file-text"></i>
                                </div>
                                Kategori
                            </h1>
                            <div class="page-header-subtitle">List Kategori</div>
                        </div>
                    </div>
                    <nav class="mt-4 rounded" aria-label="breadcrumb">
                        <ol class="breadcrumb px-3 py-2 rounded mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Tambah Kategori Baru</div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Nama</label>
                                    <input class="form-control" name="name" type="text" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name">Kategori Induk</label>
                                    <select name="parent_id" class="form-control sub-category">
                                        <option value="">Tidak ada</option>
                                        @if ($categories)
                                            @foreach($categories as $category)
                                                <?php $dash=''; ?>
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @if(count($category->subcategory))
                                                    @include('pages.admin.category.create-sub-category',['subcategories' => $category->subcategory])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-md btn-primary">Tambah Kategori Baru</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">List Kategori</div>
                        <div class="card-body">
                            {{-- Alert --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- List Data --}}
                            <table class="table table-sm table-striped" id="crudTable">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th data-orderable="false">Nama</th>
                                        <th data-orderable="false">Slug</th>
                                        <th data-orderable="false">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="{{ route('category.edit', $category->id) }}">
                                                    <i class="fas fa-edit"></i> &nbsp; Ubah
                                                </a>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Anda akan menghapus item ini secara permanen dari situs anda?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="far fa-trash-alt"></i> &nbsp; Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>                                    
                                        @if(count($category->subcategory))
                                            @include('pages.admin.category.list-sub-category',['subcategories' => $category->subcategory])
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </main>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('addon-script')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $('#crudTable').DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
    });    
    $(".sub-category").select2({
        theme: "bootstrap-5",
    });
  </script>
@endpush