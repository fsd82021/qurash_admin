@extends('admin.components.index')
@section('module_name') @lang('feature.feature') @endsection
@section('page_type') @lang('general.index') @endsection
@section('title') @lang('feature.feature') @endsection
@section('create_route', route('feature.create'))

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('feature.name')</th>
                <th>@lang('feature.icon')</th>
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        <div class="symbol symbol-70 flex-shrink-0">
                            <img src="{{ asset($value->icon) }}" alt="photo">
                        </div>
                    </td>
                    <td class="sorting_1" nowrap="nowrap">
                        <span class="label-inline">{{ $value->created_at }}</span>
                    </td>
                    <td nowrap="nowrap">
                        @include('admin.components.table-control', [
                            'name' => 'feature',
                            'value' => $value,
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
