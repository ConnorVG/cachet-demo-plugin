@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-browsers-outline"></i> {{ trans('connorvg/cachet-demo-plugin::dashboard.cachet-demo-plugin') }}: {{ trans_choice('connorvg/cachet-demo-plugin::dashboard.entries.entries', 2) }}
    </span>
    &gt; <small>{{ trans('connorvg/cachet-demo-plugin::dashboard.entries.add.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="CreateEntryForm" class="form-vertical" role="form" action="/dashboard/cachet-demo-plugin/add" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="entry-text">{{ trans('connorvg/cachet-demo-plugin::forms.entries.text') }}</label>
                        <input type="text" class="form-control" name="entry[text]" id="entry-text" required>
                    </div>
                </fieldset>

                <input type="hidden" name="entry[order]" value="0">

                <div class="btn-group">
                    <button type="submit" class="btn btn-success">{{ trans('forms.create') }}</button>
                    <a class="btn btn-default" href="{{ route('dashboard.cachet-demo-plugin.entries') }}">{{ trans('forms.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
