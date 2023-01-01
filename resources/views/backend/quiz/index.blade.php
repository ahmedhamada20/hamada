@extends('backend.layout.master')
@section('title')
قائمة الأسألة
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
                    <h1 class="page-title">قائمة الأسألة</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">قائمة الأسألة</li>
                    </ol>
                </div>
                <div class="ms-auto pageheader-btn">

                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">قائمة الأسألة</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">اسم السؤال</th>
                                        <th class="wd-10p border-bottom-0">الإجراءات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $value)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                <a href="{{ route('edit_quiz', encrypt($value->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$value->id}}">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$value->name}}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="fa fa-info-circle text-danger" style="font-size: 50px"></i>
                                                        <p>هل انت متأكد من حذف {{$value->name}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لا غير متأكد</button>
                                                        <a href="{{ route('delete_quiz', encrypt($value->id)) }}" class="btn btn-primary">نعم متأكد</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
