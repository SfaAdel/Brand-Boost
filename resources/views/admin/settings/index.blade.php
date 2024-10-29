@extends('admin.layouts.app')

@section('page.title', 'تعديل اعدادات الموقع')

@section('content')
    <div class="card main-card">
        <div class="card-header">
            <div>
              <span class="icon is-small">
            <i class="fa fa-cogs"></i>
          </span>
                <span> اعدادات الموقع</span>
            </div>
        </div>
        <div class="card-content">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">اسم الموقع</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p> {{$setting->name}} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label"> ايميل الموقع</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p>{{$setting->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">الهاتف</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p>{{$setting->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Whatsapp</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p>{{$setting->whatsapp}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">FaceBook</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                           <p>{{$setting->facebook}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">X</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p>{{$setting->x}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">YouTube</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <p>{{$setting->youtube}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">العنوان</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <p>{{$setting->address}}</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">LinkedIn</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <p>{{$setting->linkedin}}</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">Instagram</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <p>{{$setting->instagram}}</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">Tiktok</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <p>{{$setting->tiktok}}</p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label required">صورة الموقع</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <img src="{{ asset('images/settings/' . $setting->logo) }}" alt="Logo Image" style="max-width: 20rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="card-footer">
            <div class="buttons has-addons">


                <a class="button is-success " href="{{ route('admin.settings.edit', $setting->id) }}">
                    تعديل </a>
            </div>
        </footer>

    </div>
@endsection


