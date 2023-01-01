<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{ route('dashboard') }}">
            <img src="{{asset('backend/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset('backend/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
            <img src="{{asset('backend/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
            <img src="{{asset('backend/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a><!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3></h3></li>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide" href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">لوحة التحكم</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">اسألة الأستقصاء</span><i class="angle fa fa-angle-left"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('create_quiz') }}" class="slide-item"> اضافة سؤال</a></li>
                <li><a href="{{ route('quiz') }}" class="slide-item"> قائمة الأسألة</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('setting') }}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">الأعدادات العامة</span></a>
        </li>
    </ul>
</aside>
<!--/APP-SIDEBAR-->
