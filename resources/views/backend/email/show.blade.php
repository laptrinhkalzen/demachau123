@extends('backend.layouts.master')
@section('content')
    <div class="content">
        <form action="{!!route('admin.email.update', ['id' => $record->id])!!}" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Lựa chọn</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Lựa chọn thông tin</a></li>


                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="left-icon-tab1">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label text-right">Mẫu email</label>
                                            <div class="col-md-9">
                                                <select class="form-control select-search" data-placeholder="Chọn danh mục cha" data-fouc name="parent_id">
                                                    {!!$parent_html!!}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label text-right">Mã đơn hàng</label>
                                            <div class="col-md-9">
                                                <select class="form-control select-search" data-placeholder="Chọn danh mục cha" data-fouc name="parent_id">
                                                    {!!$parent_html!!}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label text-right">Tên games</label>
                                            <div class="col-md-9">
                                                <select class="form-control select-search" data-placeholder="Chọn danh mục cha" data-fouc name="parent_id">
                                                    {!!$parent_html!!}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label text-right">Tổng tiền</label>
                                            <div class="col-md-9">
                                                <select class="form-control select-search" data-placeholder="Chọn danh mục cha" data-fouc name="parent_id">
                                                    {!!$parent_html!!}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label text-right">Mô tả </label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="description">{!!is_null(old('description'))?$record->description:old('description')!!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label text-right">Hiển thị </label>
                                            <div class="col-md-10">
                                                <input type="checkbox" class="form-check-input-styled" name="status" data-fouc="" @if($record->status) checked @endif>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 required control-label text-right text-semibold" for="images">Hình ảnh:</label>
                                            <div class="col-lg-10 div-image">
                                                <div class="file-input file-input-ajax-new">
                                                    <div class="file-preview ">
                                                        <div class=" file-drop-zone">
                                                        </div>
                                                    </div>
                                                    <div class="input-group file-caption-main">
                                                        <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                        </div>
                                                        <div class="input-group-btn input-group-append">
                                                            <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                                <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="images" class="image_data" value="{{$record->images}}">
                                                <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>



                                <div class="col-md-12">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Nội dung: </label>
                                        <div class="col-md-12">
                                            <textarea class="form-control ckeditor" id="content" name="content">{!!is_null(old('content'))?$record->content:old('content')!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <a type="button" href="{{route('admin.email.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                                <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
@section('script')
    @parent
    <script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

    <script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

    <script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
    <!-- Theme JS files -->
    <script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tagsinput.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tokenfield.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/ui/prism.min.js') !!}"></script>

    <!-- Theme JS files -->
    <script src="{!! asset('assets/global_assets/js/plugins/ui/moment/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/daterangepicker.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/anytime.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.date.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.time.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/legacy.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/plugins/notifications/jgrowl.min.js') !!}"></script>
    <script src="{!! asset('assets/backend/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! asset('assets/backend/js/custom.js') !!}"></script>

@stop

