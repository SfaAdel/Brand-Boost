@extends('admin.layouts.app')

@section('page.title', 'تفاصيل العنوان')

@section('content')
    <div class="card">
        <section class="section main-block">
            <h1 class="title">
                <a href="{{ route('admin.titles.index') }}" class="button">
                    <span class="icon is-small"><i class="fa fa-newspaper"></i></span>
                    <span>قائمة العناوين</span>
                </a>
            </h1>
            <!-- Start Card Content -->
            <div class="card-content">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">القسم التابع له</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">

{{$title->section}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">العنوان </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input type="text" class="input" value="{{ $title->title }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">وصف قصير</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input type="text" class="input" value="{{ $title->short_description }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                {{-- <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">العنوان الثانوي</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input type="text" class="input" value="{{ $blog->second_title }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <hr /> --}}
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">وصف طويل</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <div>{!! $title->long_description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">صورة</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <img src="{{ asset('images/titles/' . $title->icon) }}" alt="Blog Image" style="max-width: 30rem;">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">صورة البانر</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <img src="{{ asset('images/pages_banners/' . $title->banner) }}" alt="Blog Image" style="max-width: 30rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Content -->
        </section>
    </div>
    @include('admin.partials.deleteModal')
@endsection
