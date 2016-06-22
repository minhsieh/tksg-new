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
            <span>{{$page->name}}</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> {{$page->name}}</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-3">
                        新增項目 <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="table_list">
            <thead>
            <tr>
                <th class="table-checkbox">
                    <input type="checkbox" class="group-checkable" name="ids[]" data-set="#table_list .checkboxes"/>
                </th>
                <th>
                    項目名稱
                </th>                       
                <th>
                    動作
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($page_contents as $one)
            <tr class="odd gradeX">
                <td>
                    <input type="checkbox" class="checkboxes ids" name="ids[]" value="{{$one->id}}"/>
                </td>
                <td>
                    {{ $one->title }}
                </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        動作 <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <i class="fa fa-pencil"></i>
                                編輯 </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a class="btn_news_delete" uid="{{$one->id}}" href="javascript:;">
                                <i class="fa fa-trash-o"></i>
                                刪除 </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('add_js')
@endsection
