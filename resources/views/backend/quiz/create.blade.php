@extends('backend.layout.master')
@section('title')
اضافة سؤال
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
                    <h1 class="page-title">اضافة سؤال</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">اضافة سؤال</li>
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
                            <h3 class="card-title">اضافة سؤال جديدة</h3>
                        </div>
                        <div class="card-body pb-2">
                            <form action="{{ route('store_quiz') }}" method="post">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="text" name="name" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">اضافة سؤال</button>
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
