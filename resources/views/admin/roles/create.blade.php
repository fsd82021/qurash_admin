@extends('admin.components.form')
@section('module_name', trans('roles.roles'))
@section('page_type', trans('general.add_new'))
@section('title') @lang('roles.roles') @endsection
@section('index_route', route('roles.index'))
@section('store_route', route('roles.store'))
@section('form_type', 'POST')

@section('fields_content')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="form-group">
                    <label>@lang('roles.name')<span class="text-danger"> * </span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                        </div>
                        <input type="text" name="name" placeholder="@lang('roles.name')" class="form-control  pl-5 min-h-40px @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <th scope="col" width="1%">
                            <span class="switch switch-brand">
                                <label>
                                    <input type="checkbox" name="all_permission">
                                    <span></span>
                                </label>
                            </span>
                        </th>
                        <th scope="col" width="20%">Name</th>
                        <th scope="col" width="1%">Guard</th>
                    </thead>

                    @foreach ($permissions as $permission)
                        <tr>
                            <td>
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="permission[{{ $permission->name }}]" value="{{ $permission->name }}" class='permission'>
                                        <span></span>
                                    </label>
                                </span>
                            </td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="card card-custom">
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('users.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
