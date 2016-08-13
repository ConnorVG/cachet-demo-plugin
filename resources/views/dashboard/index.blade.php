@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-nutrition-outline"></i> {{ trans('connorvg/cachet-demo-plugin::dashboard.cachet-demo-plugin') }}: {{ trans_choice('connorvg/cachet-demo-plugin::dashboard.entries.entries', 2) }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ route('dashboard.cachet-demo-plugin.entries.add') }}">
                {{ trans('connorvg/cachet-demo-plugin::dashboard.entries.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        @include('dashboard.partials.errors')
        <div class="row">
            <div class="col-sm-12 striped-list" id="entry-list">
                @forelse($entries as $entry)
                <div class="row striped-list-item" data-entry-id="{{ $entry->id }}">
                    <div class="col-xs-6">
                        <h4>
                            @if($entries->count() > 1)
                            <span class="drag-handle"><i class="ion ion-drag"></i></span>
                            @endif
                            {{ $entry->text }} <small style="white-space:nowrap">
                        </h4>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="/dashboard/cachet-demo-plugin/{{ $entry->id }}/delete" class="btn btn-danger confirm-action" data-method="DELETE">{{ trans('connorvg/cachet-demo-plugin::forms.entries.actions.delete') }}</a>
                    </div>
                </div>
                @empty
                <div class="list-group-item text-danger">{{ trans('connorvg/cachet-demo-plugin::dashboard.entries.add.message') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop
