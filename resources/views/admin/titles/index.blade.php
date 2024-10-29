<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', ' العناوين')
<!-- Start Content Section -->
@section('content')
    <!-- Start Card -->
    <div class="card main-card">
        <!-- Start Card Header -->
        <div class="card-header is-justify-content-space-between">
            <span class="">
                <span class="icon is-small">
                    <i class="fa fa-plus-circle"></i>
                </span>
                <span>قائمة العناوين</span>
            </span>
        </div><!-- End Card Header -->

        <div class="center">
            @include('admin.partials.search_result', ['data' => $titles])
        </div>

        @if (!$titles->isEmpty())
            <!-- Start Card Content -->
            <div class="card-content">
                <div class="table-container">
                    <table class="table is-fullwidth" id="categories">
                        <thead>
                            <tr>
                                <th>الاسم </th>
                                {{-- <th> وصف قصير</th> --}}
                                <th>القسم</th>
                                <th>الصورة</th>
                                @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
                                    <th>الاجراءات</th>
                                @endif
                            </tr>
                        </thead>
                        @php
                            $sections = [
                                'about_us' => 'من نحن',
                                'services' => 'الخدمات',
                                'testimonials' => 'اراء العملاء',
                                'advantages' => 'المزايا',
                                'teams' => 'فرق العمل',
                                'blogs' => 'المدونات',
                                'contacts' => 'اتصل بنا',
                                'main' => 'الرئيسي',
                            ];
                        @endphp
                        <tbody>
                            @foreach ($titles as $title)
                                <tr>
                                    <td>{{ $title->title }}</td>
                                    {{-- <td>{{ $title->short_description }}</td> --}}
                                    <td>{{ $sections[$title->section] ?? $title->section }}</td>
                                    @if ($title->icon)
                                        <td>
                                            <img src="{{ asset('images/titles/' . $title->icon) }}"
                                                class="icon rounded-circle" alt="icon">
                                        </td>
                                    @else
                                        <td>- -</td>
                                    @endif
                                    @if (auth('admin')->user()->role == 'super_admin' || auth('admin')->user()->role == 'data_entry')
                                        <td>
                                            <div class="buttons has-addons">
                                                <a class="button is-info"
                                                    href="{{ route('admin.titles.edit', $title->id) }}">
                                                    تعديل
                                                </a>
                                                <a class="button is-warning"
                                                    href="{{ route('admin.titles.show', $title->id) }}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                {{-- <a class="modal-open button is-danger" status-name="تأكيد الحذف"  traget-modal=".delete-modal" data_id="{{ $title->id }}" data_name="{{ $title->title }}" data-url="{{ route('admin.titles.destroy', $title->id) }}">حذف</a> --}}

                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- End Card Content -->
        @endif

        <!-- Start Card Footer -->
        <div class="center d-flex justify-center align-content-center m-4">
            <div class="card-footer with-pagination ">
                {{ $titles->links() }}
            </div>
        </div>
        <!-- End Card Footer -->
    </div>
    @include('admin.partials.deleteModal')
@endsection
<!-- End Content Section -->
