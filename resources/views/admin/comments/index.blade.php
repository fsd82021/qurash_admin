@extends('admin.components.index')
@section('module_name') @lang('comments.comments') @endsection
@section('page_type') @lang('general.index') @endsection
@section('title') @lang('comments.comments') @endsection

<style>
    .max-lines {
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        margin-bottom: 0
    }
    .card-toolbar {
        display: none !important
    }

</style>

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.comment')</th>
                <th>@lang('general.name')</th>
                <th>@lang('general.email')</th>
                <th nowrap="nowrap">@lang('general.comment_status')</th>
                <th nowrap="nowrap">@lang('general.recipe_title')</th>
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>
                        <p class="max-lines">{{ $value->comment }}</p>
                    </td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <form>
                            @csrf
                            <span class="switch switch-icon">
                                <label>
                                    {{-- <input type="hidden" name="comment_id" value="{{$value->id}}"> --}}
                                    <input type="checkbox" name="comment_status" comment_id="{{ $value->id }}" value="{{ $value->comment_status }}" {{ $value->comment_status == 'approved' ? 'checked=checked' : '' }}>
                                    <span></span>
                                </label>
                                <div class="spinner spinner-primary mr-15" style="display: none"></div>
                            </span>
                        </form>
                    </td>
                    <td>
                        <p class="max-lines">{{ $value->recipe->title }}</p>
                    </td>
                    <td class="sorting_1" nowrap="nowrap">
                        <span class="label-inline">{{ $value->created_at }}</span>
                    </td>
                    <td nowrap="nowrap">
                        <a href="{{ route('comments.show', $value->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="@lang('general.locales.show')">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="1" />
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <form id="delete-form-{{ $value->id }}" style="display: inline-table;" action="{{ route('comments.destroy', $value->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="@lang('general.locales.delete')" data-toggle="modal" data-target="#deleteModalSizeSm-{{ $value->id }}">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                            <path
                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                fill="#000000" opacity="1"></path>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                            <div class="modal fade" id="deleteModalSizeSm-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalSizeSm-{{ $value->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">@lang('general.translation.sure')</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mb-0">@lang('general.translation.revert')</p>
                                        </div>
                                        <div class="modal-footer flex-start">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.translation.cancel')</button>
                                            <button type="submit" class="btn btn-primary">@lang('general.translation.delete')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on("input", "input[name='comment_status']", function() {
                    var _token = $("input[name='_token']").val();
                    var comment_id = $(this).attr("comment_id");

                    $(this).parents("form").find(".switch .spinner").fadeIn();
                    $(this).prop("disabled", true);

                    $.ajax({
                        context: this,
                        url: "{{ route('comments.comment-status') }}",
                        type: "POST",
                        data: {
                            _token: _token,
                            comment_id: comment_id,
                        },

                        success: function(data) {
                            $(this).parents("form").find(".switch .spinner").fadeOut();
                            $(this).prop("disabled", false);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
