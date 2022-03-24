@extends('admin.components.index')
@section('module_name') @lang('faq.faq') @endsection
@section('page_type') @lang('general.index') @endsection
@section('title') @lang('faq.faq') @endsection
@section('create_route', route('faq.create'))

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('faq.question')</th>
                <th>@lang('faq.answer')</th>
             
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>{{ $value->question }}</td>
                    <td>{{ $value->question }}</td>

                   
                    <td class="sorting_1" nowrap="nowrap">
                        <span class="label-inline">{{ $value->created_at }}</span>
                    </td>
                    <td nowrap="nowrap">
                        @include('admin.components.table-control', ['name'=>'faq', 'value'=>$value])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
