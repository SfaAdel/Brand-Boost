<!-- Start Card Content -->
<div class="card-content">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">العنوان </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('title', null, ['class' => 'input' , 'required'] )!!}
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">القسم</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <div class="select">
                        <select name="section" required >
                            <option value="" disabled selected>اختر قسمًا</option>
                            <option value="main" {{ isset($title) && $title->section == 'main' ? 'selected' : '' }}>الرئيسي</option>
                            <option value="about_us" {{ isset($title) && $title->section == 'about_us' ? 'selected' : '' }}>من نحن</option>
                            <option value="services" {{ isset($title) && $title->section == 'services' ? 'selected' : '' }}>الخدمات</option>
                            <option value="testimonials" {{ isset($title) && $title->section == 'testimonials' ? 'selected' : '' }}>اراء العملاء</option>
                            <option value="advantages" {{ isset($title) && $title->section == 'advantages' ? 'selected' : '' }}>المزايا</option>
                            <option value="teams" {{ isset($title) && $title->section == 'teams' ? 'selected' : '' }}>فرق العمل</option>
                            <option value="blogs" {{ isset($title) && $title->section == 'blogs' ? 'selected' : '' }}>المدونات</option>
                            <option value="contacts" {{ isset($title) && $title->section == 'contacts' ? 'selected' : '' }}>اتصل بنا</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">وصف قصير  </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('short_description', null, ['class' => 'input' , 'required'] )!!}
                </div>
            </div>
        </div>
    </div>
  <hr />
  <div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label required">وصف طويل  </label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <ck-editor id="long_description" name="long_description" @if (isset($title))
                    old-data="{{ $title->long_description }}" @endif></ck-editor>
            </div>
        </div>
    </div>

</div>

<hr>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">صورة </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <uploader label="صورة" name="icon" @if (isset($title))
                        file="{{ asset('images/titles/' . $title->icon) }}" @endif></uploader>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">صورة البانر</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <uploader label="banner" name="banner"
                        @if (isset($title)) file="{{ asset('images/pages_banners/' . $title->banner) }}" @endif
                        required
                        ></uploader>
                </div>
            </div>
        </div>
    </div>
    {{-- <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">الحالة</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="active" value="1" @if(isset($department) && $department->active) checked @else checked @endif>
                        مفعل
                    </label>
                    <label class="radio">
                        <input type="radio" name="active" value="0" @if(isset($department) && !$department->active) checked  @endif>
                        غير مفعل
                    </label>
                </div>
            </div>
        </div>
    </div> --}}
</div><!-- End Card Content -->
<!-- Start Card Footer -->
<div class="card-footer">
  <div class="buttons has-addons">
    <a class="button is-info" href="{{ route('admin.titles.index') }}"> الغاء </a>
    <button type="submit" class="button is-success">حفظ</button>
  </div>
</div><!-- End Card Footer -->


