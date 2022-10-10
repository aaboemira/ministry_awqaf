@extends('admin.layouts.master')
@section('title')
اضافه تفسير صوتى جديد
@endsection
@section('css')
<link href="{{ URL::asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">التفسير الصوتى</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه تفسير صوتى جديد</span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>السورة</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                           <option value="">البقره</option>
                           <option value="">ال عمران</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>من الاية</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>الى الاية</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>حاله التفسير</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">منشور</option>
                            <option value="0">غير منشور</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <p class="text-danger">* صيغة المرفق mp3 </p>
                        <h5 class="card-title">التفسير</h5>
    
                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".mp3" data-height="70" />
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">اضافه تفسير جديد</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection