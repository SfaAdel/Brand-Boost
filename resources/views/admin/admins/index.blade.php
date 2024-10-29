<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'مراجعي الكتب')
<!-- Start Content Section -->
@section('content')

@php
$roleMapping = [
    'super_admin' => 'مدير',
    'admin' => 'مراجع',
    'data_entry' => 'مدخل بيانات',

];
@endphp

    <!-- Start Card -->
    <div class="card main-card">
        <!-- Start Card Header -->
        <div class="card-header is-justify-content-space-between">
            <a href="{{ route('admin.admins.create') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-plus-circle"></i>
        </span>
                <span>اضافة مراجع</span>
            </a>
        </div>
        <!-- End Card Header -->
        <div class="card-content">
            <div class="table-container">
                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الالكتروني</th>
                        <th>الحالة</th>
                        {{-- <th>الحالة</th> --}}
                        <th>الاجراءات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $roleMapping[$admin->role] ?? ' - - ' }}</td>
                        {{-- <td>{{ $admin->active ? 'مفعل' : 'غير مفعل' }}</td> --}}
                        <td>
                            <div class="buttons has-addons">
                                <a class="button is-info" href="{{ route('admin.admins.edit', $admin->id) }}"> تعديل </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="card-footer with-pagination">
            {{ $admins->links('vendor.pagination.bulma') }}
        </div> --}}
    </div>
    <!-- End Card -->
@endsection
<!-- End Content Section -->
