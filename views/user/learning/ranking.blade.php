@extends(view_path('layouts.layout'))

@section('content')
<!-- Social Widgets Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-share_alt"></i>{{ $title }}<br><small>@trans('user::ui.ranking.description')</small>
        </h1>
    </div>
</div>
<!-- END Social Widgets Header -->

<div class="row">
    <?php $n = 1 ?>
    @foreach($users as $u)
    <div class="col-sm-6 col-lg-3">
        <!-- Default Simple Widget -->
        <div class="widget">
            <div class="widget-simple">
                <a href="{{ route('learning.user.profile', $u->slug) }}">
                    <img src="{{ Gravatar::src($u->email) }}" alt="avatar" class="widget-image img-circle pull-left">
                </a>
                <h4 class="widget-content text-right">
                    <a href="{{ route('learning.user.profile', $u->slug) }}" class="themed-color-modern">
                        <strong>{{ $u->first_name }}</strong>
                    </a>
                    <small>{{ $u->last_name }}</small>
                </h4>
            </div>
            <div class="widget-extra">
                <div class="row text-center themed-background-dark-modern">
                    <div class="col-xs-4">
                        <h3 class="widget-content-light">
                            <i class="gi gi-cup"></i><br>
                            <small>{{ $n++ }}</small>
                        </h3>
                    </div>
                    <div class="col-xs-4">
                        <h3 class="widget-content-light">
                            <i class="fa fa-bar-chart-o"></i><br>
                            <small>{{ $u->points }}</small>
                        </h3>
                    </div>
                    <div class="col-xs-4">
                        <h3 class="widget-content-light">
                            <i class="fa fa-globe"></i><br>
                            <small><img src="{{ asset_theme('platform/img/flags/'.$u->country->iso2.'.png') }}" data-toggle="tooltip" title="{{ $u->country->short_name }}"/></small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Default Simple Widget -->
    </div>
    @endforeach
</div>
@stop