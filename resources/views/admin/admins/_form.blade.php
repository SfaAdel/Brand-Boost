<div class="card-content">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">الاسم</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('name', null, ['class' => 'input' , 'required'] )!!}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">البريد الالكتروني</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('email', null, ['class' => 'input' , 'required'] )!!}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">كلمة المرور</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control has-icon has-icon-right ">
                    @if(isset($admin))
                        <input class="input" value="{{ isset($admin) ? $admin->password : null }}" type="password" name="password">
                    @else
                        {!! Form::password('password', null, ['class' => 'input' , 'required'] )!!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">الصلاحية</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="role" value="admin" @if(isset($admin) && $admin->active) checked @else checked @endif>
مراجع
                    </label>
                    <label class="radio">
                        <input type="radio" name="role" value="data_entry" @if(isset($admin) && !$admin->active) checked  @endif>
                         مدخل بيانات
                    </label>
                    <label class="radio">
                        <input type="radio" name="role" value="super_admin" @if(isset($admin) && !$admin->active) checked  @endif>
                         مدير
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
<footer class="card-footer">
    <div class="buttons has-addons">
        <a class="button is-info" href="{{ route('admin.admins.index') }}"> الغاء </a>
        <button type="submit" class="button is-success">حفظ</button>
    </div>
</footer>
