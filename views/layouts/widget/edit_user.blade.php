<!-- Interactive Block -->
<div class="block">
    <!-- Interactive Title -->
    <div class="block-title">
        <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
        </div>
        <h2>@trans('user::ui.widget.update-user.title')</h2>
    </div>
    <!-- END Interactive Title -->

    <!-- Interactive Content -->
    <!-- The content you will put inside div.block-content, will be toggled -->
    <div class="block-content">
        {!! Form::model($profile, ['route' => ['learning.user.update.profile', $profile], 'id'=>'form-widget-update-user', 'method' => 'PUT', 'class' => 'form-horizontal form-bordered'])  !!}
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.username')</label>
                <div class="col-md-9">
                    <p class="form-control-static">{{ $profile->username }}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.firstname')</label>
                <div class="col-md-9">
                    {!! Form::text('first_name', null,  ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.lastname')</label>
                <div class="col-md-9">
                    {!! Form::text('last_name', null, ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.country')</label>
                <div class="col-md-9">
                    {!! Form::select('country_id', $countries, $profile->country->id, ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.email')</label>
                <div class="col-md-9">
                    {!! Form::text('email', null, ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.telephone')</label>
                <div class="col-md-9">
                    {!! Form::text('phone_number', null, ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.password')</label>
                <div class="col-md-9">
                    {!! Form::password('password', ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">@trans('user::ui.user.password_confirmation')</label>
                <div class="col-md-9">
                    {!! Form::password('password_confirmation', ['class'=>'form-control'])  !!}
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> @trans('user::ui.widget.update-user.btn-save')</button>
                </div>
            </div>
        {!! Form::close()  !!}
    </div>
    <p class="text-muted">You can also have content that ignores toggling..</p>
    <!-- END Interactive Content -->
</div>
<!-- END Interactive Block -->
