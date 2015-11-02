@extends(view_path('layouts.public.layout'))

@section('content')
<!-- User Profile Header -->
<!-- For an image header add the class 'content-header-media' and an image as in the following example -->
<div class="content-header content-header-media">
    <div class="header-section">
        <img src="{{{ Gravatar::src($profile->email) }}}" alt="Avatar" class="pull-right img-circle">
        <h1>
            {{{ $profile->full_name }}}
            <br>
            <small>@trans('user::ui.common.country'): <img src="{{ asset_theme('platform/img/flags/'.$profile->country->iso2.'.png') }}" data-toggle="tooltip" title="{{ $profile->country->spanish_name }}"/></small>
        </h1>
    </div>
    <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
    <img src="{{ asset_theme('platform/img/placeholders/headers/profile_header.png')}}" alt="header image" class="animation-pulseSlow">
</div>
<!-- END User Profile Header -->

<!-- User Profile Content -->
<div class="row">
    <!-- First Column -->
    <div class="col-md-6 col-lg-7">

        <!-- Newsfeed Block -->
        <div class="block">
            <!-- Newsfeed Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <!--<a href="javascript:void(0)" class="label label-danger animation-pulse">Live Feed</a> -->
                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Customize Feed"><i class="fa fa-pencil"></i></a>-->
                </div>
                <h2><strong>Timeline</strong></h2>
            </div>
            <!-- END Newsfeed Title -->

            <!-- Newsfeed Content -->
            <div class="block-content-full">
                <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                <ul class="media-list media-feed media-feed-hover">
                    {{-- <!-- Status Updated -->
                    @foreach($status as $state)
                    <li class="media">
                        <a href="{{ route('profile', $profile->id) }}" class="pull-left">
                            <img src="{{{ Gravatar::src($profile->email) }}}" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right">
                                    <small>{{{ $state->difference_hour }}}</small>
                                    <span class="text-info" data-toggle="tooltip" title="Web"><i class="fa fa-globe"></i></span>
                                </span>
                                <strong><a href="{{ route('profile', $profile->id) }}">{{{ $profile->full_name }}}</a> ha publicado.</strong>
                            </p>
                            <p>{{{ $state->status }}}</p>
                        </div>
                    </li>
                    @endforeach
                    --}}
                    <li class="media text-center">
                        <a href="javascript:void(0)" class="btn btn-xs btn-default push">Ver mas</a>
                    </li>
                    <!-- END Status Updated -->
                </ul>
            </div>
            <!-- END Newsfeed Content -->
        </div>
        <!-- END Newsfeed Block -->
    </div>
    <!-- END First Column -->

    <!-- Second Column -->
    <div class="col-md-6 col-lg-5">
        <!-- Info Block -->
        <div class="block">
            <!-- Info Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Solicitud Amistad"><i class="fa fa-plus"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Contratame!"><i class="fa fa-briefcase"></i></a>
                </div>
                <h2>@trans('user::ui.profile.about') <strong>{{ $profile->full_name }}</strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Descargar CV">Bio</a></small></h2>
            </div>
            <!-- END Info Title -->

            <!-- Info Content -->
            <table class="table table-borderless table-striped">
                <tbody>
                    <tr>
                        <td><strong>@trans('user::ui.profile.points')</strong></td>
                        <td>{{{ $profile->points }}}</td>
                    </tr>
                    <tr>
                        <td><strong>@trans('user::ui.common.telephone')</strong></td>
                        <td>{{{ $profile->phone_number }}}</td>
                    </tr>
                    <tr>
                        <td><strong>@trans('user::ui.common.email')</strong></td>
                        <td><a href="mailto:{{{ $profile->email }}}">{{{$profile->email}}}</a></td>
                    </tr>
                </tbody>
            </table>
            <!-- END Info Content -->
        </div>
        <!-- END Info Block -->
    </div>
    <!-- END Second Column -->
</div>
<!-- END User Profile Content -->
@stop