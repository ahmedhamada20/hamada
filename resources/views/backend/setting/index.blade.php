@extends('backend.layout.master')
@section('title')
    الأعدادات العامة
@endsection
@section('css')

@endsection
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <div class="side-app">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">الأعدادات العامة</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الأعدادات العامة</li>
                    </ol>
                </div>
                <div class="ms-auto pageheader-btn">
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">الأعدادات العامة </h3>
                        </div>
                        <div class="card-body pb-2">
                            <form action="{{ route('update_setting', encrypt($data->id)) }}" method="post">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <img src="{{asset('upload/setting/'.$data->logo)}}" alt="" style="height: 200px">
                                        <label for="">صورة اللوجو</label>
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="file" name="logo">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{asset('upload/setting/'.$data->fave)}}" alt="" style="height: 200px">
                                        <label for="">صورة الأيقون</label>
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="file" name="fave">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{asset('upload/setting/'.$data->background)}}" alt="" style="height: 200px">
                                        <label for="">صورة الخلفية</label>
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="file" name="background">
                                    </div>
                                    <div class="col-lg-12">
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="text" name="name" value="{{$data->name}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">تحديث الإعدادات</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
    </div>
    <!-- CONTAINER END -->

@endsection
@section('js')

@endsection
