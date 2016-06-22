@extends('global-manage.main')

@section('add_css')
@endsection


@section('content')
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">首頁</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">頁面管理</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            @if($mode == 'create')
            <span>新增頁面內容</span>
            @else
            <span>編輯頁面內容</span>
            @endif
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> 
                    @if($mode == 'create')
                    新增頁面內容<small>Add New Page Content</small>
                    @else
                    編輯頁面內容<small>Edit Page Content</small>
                    @endif
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                @if($mode == 'create')
                <form id="form" method="post" action="{{action('Manage\PageController@store')}}" class="form-horizontal form-bordered">
                @else
                <form id="form" method="post" action="{{action('Manage\PageController@update')}}" class="form-horizontal form-bordered">
                <input type="hidden" name="id" value="{{$page_content->id}}">
                @endif
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">標題</label>
                            <div class="col-md-10">
                                <input type="text" placeholder="請輸入項目標題" class="form-control" name="title"
                                @if($mode == "edit")
                                value="{{$page_content->title}}"
                                @endif
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">內容</label>
                            <div class="col-md-10">
                                <textarea name="content" id="content" rows="50" cols="80">
                                    @if($mode == 'create')
                                    {!! old('content') !!}
                                    @else
                                    {{$page_content->content}}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="hidden" name="page_id" value="{{$page->id}}">
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-check"></i> 儲存</button>
                                        <button type="button" class="btn default">取消</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
@endsection

@section('add_js')
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'content' );

    $('#form').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block help-block-error', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",  // validate all fields including form hidden input
        rules:{
            title:{
                required:true
            }
        },
        messages:{
            title:{
                required:"請輸入項目標題"
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit   
            $('body').scrollTop($('.has-error'));
        },

        highlight: function (element) { // hightlight error inputs
           $(element)
                .closest('.form-group').addClass('has-error'); // set error class to the control group
        },

        unhighlight: function (element) { // revert the change done by hightlight
            $(element)
                .closest('.form-group').removeClass('has-error'); // set error class to the control group
        },

        success: function (label) {
            label
                .closest('.form-group').removeClass('has-error'); // set success class to the control group
        },

        submitHandler: function (form) {
            $('textarea.ckeditor').each(function () {
               var $textarea = $(this);
               $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
            });
            form.submit();
        }
    });
</script>
@endsection