@extends('backend.layout.master')
@section('title')
    تعديل سؤال
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
                    <h1 class="page-title">تعديل سؤال</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">تعديل سؤال</li>
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
                            <h3 class="card-title">تعديل سؤال </h3>
                        </div>
                        <div class="card-body pb-2">
                            <form action="{{ route('update_quiz', encrypt($data->id)) }}" method="post">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <input class="form-control mb-4" placeholder="اسم السؤال" type="text" name="name" value="{{$data->name}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">تعديل سؤال</button>
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
