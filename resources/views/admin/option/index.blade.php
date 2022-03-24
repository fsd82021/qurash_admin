@extends('admin.components.index')
{{-- Preparing page properties --}}
@section('module_name') @lang('service.option') @endsection
@section('permission', 'organization')
@section('title') @lang('service.option') @endsection
@section('create_route') {{ route('option_create', $service_id) }} @endsection

{{-- Table Content --}}
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">@lang('service.value')</th>
                <th scope="col">@lang('service.control')</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->value }}</td>
                    <td>
                        @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'option',
                        'value'=>$value])
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{-- {{ $data->links('vendor.pagination.custom') }} --}}
    </div>
@endsection
