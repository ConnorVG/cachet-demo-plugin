@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-nutrition-outline"></i> {{ trans('dashboard.cachet-demo-plugin.cachet-demo-plugin') }}
            </span>
            <div class="clearfix"></div>
        </div>
        @include('dashboard.partials.errors')
    </div>
</div>
@stop
