@extends('admin.components.index')
@section('module_name') @lang('partner.partner') @endsection
@section('page_type') @lang('general.index') @endsection
@section('title') @lang('partner.partner') @endsection
@section('create_route', route('partner.create'))

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.image')</th>
                <th>@lang('general.image_alt')</th>
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>
                        <div class="symbol symbol-70 flex-shrink-0">
                            <img src="{{ asset($value->image) }}" alt="photo">
                        </div>
                    </td>
                    <td>{{ $value->img_alt }}</td>
                    <td class="sorting_1" nowrap="nowrap">
                        <span class="label-inline">{{ $value->created_at }}</span>
                    </td>
                    <td nowrap="nowrap">
                        @include('admin.components.table-control', ['name'=>'partner', 'value'=>$value])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
