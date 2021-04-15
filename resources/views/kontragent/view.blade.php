<!DOCTYPE html>
<html lang="ru">
<!--begin::Head-->

<head>
    @include("layout.head");
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        @include("layout.logo")
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="/" class="brand-logo">
                        <img alt="Logo" src="assets/media/logos/logo-light.png" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        @include("layout.menunav")

                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Логин</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Mobile Toggle-->
                                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                                    id="kt_subheader_mobile_toggle">
                                    <span></span>
                                </button>
                                <!--end::Mobile Toggle-->
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">Просмотр контрагента</h5>
                                    <!--end::Page Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul
                                        class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item"><a href="index.php?id=8"
                                                class="text-muted">Контрагенты</a></li>
                                        <li class="breadcrumb-item active">Просмотр контрагента</li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Actions-->
                                <a href="[[~9]]" class="btn btn-light-primary font-weight-bolder btn-sm">Редактировать
                                    контрагента</a>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Profile Overview-->
                            <div class="d-flex flex-row">
                                <!--begin::Aside-->
                                @include("kontragent.parts.info_kontragent_aside")
                                <!--end::Aside-->
                                <!--begin::Content-->
                                <div class="flex-row-fluid ml-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!--begin::List Widget 14-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Header-->
                                                <div class="card-header border-0">
                                                    <h3 class="card-title align-items-start flex-column">

                                                        <span class="card-label font-weight-bolder text-dark">Инфориация
                                                            по счетам</span>
                                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">За
                                                            все время</span>
                                                    </h3>

                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-2">

                                                    <ul class="nav nav-tabs nav-tabs-line">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#kt_tab_pane_1">Цифры</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                                href="#kt_tab_pane_2">От своих</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                                href="#kt_tab_pane_3">От контрагентов</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                                href="#kt_tab_pane_4">Траты по категориям</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content mt-5" id="myTabContent">
                                                        <!-- tab1 -->
                                                        <div class="tab-pane fade show active" id="kt_tab_pane_1"
                                                            role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                                            <div class="alert alert-secondary" role="alert">
                                                                Поступления на счет кроме своих счетов
                                                            </div>
                                                            <table class="table table-sm table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Счет</td>
                                                                        <td>Поступления</td>
                                                                        <td>Расходы</td>
                                                                        <td>Выписка</td>
                                                                        <td>Дата
                                                                            <a type="button" data-container="body"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Дата последнего платежа в выписке для данного счета">
                                                                                <i
                                                                                    class="flaticon-exclamation-1 icon-nm text-primary"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">1354684646468744964658468658</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                        <td><span
                                                                                class="label label-info label-inline mr-2">Есть</span>
                                                                        </td>
                                                                        <td>20.11.2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="[[~11]]">1354684646468744964</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                        <td><span
                                                                                class="label label-info label-inline mr-2">Есть</span>
                                                                        </td>
                                                                        <td>30.11.2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">13546846464687449645435</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                        <td><span
                                                                                class="label label-info label-inline mr-2">Есть</span>
                                                                        </td>
                                                                        <td>01.11.2020</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /tab1 -->
                                                        <!-- tab2 -->
                                                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel"
                                                            aria-labelledby="kt_tab_pane_2">
                                                            <div class="alert alert-secondary" role="alert">
                                                                Поступления на счет от своих компаний, кроме своих
                                                                счетов
                                                            </div>
                                                            <table class="table table-sm table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Счет</td>
                                                                        <td>Поступления</td>
                                                                        <td>Расходы</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">1354684646468744964658468658</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="[[~11]]">1354684646468744964</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">13546846464687449645435</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /tab2 -->
                                                        <!-- tab3 -->
                                                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel"
                                                            aria-labelledby="kt_tab_pane_3">
                                                            <div class="alert alert-secondary" role="alert">
                                                                Поступления от контрагентов на счет кроме своих компаний
                                                                и своих счетов
                                                            </div>
                                                            <table class="table table-sm table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Счет</td>
                                                                        <td>Поступления</td>
                                                                        <td>Расходы</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">1354684646468744964658468658</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="[[~11]]">1354684646468744964</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">13546846464687449645435</a>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /tab3 -->
                                                        <!-- tab4 -->
                                                        <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel"
                                                            aria-labelledby="kt_tab_pane_4">
                                                            <div class="alert alert-secondary" role="alert">
                                                                Поступления от контрагентов на счет кроме своих компаний
                                                                и своих счетов
                                                            </div>
                                                            <table class="table table-sm table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <td>Счет</td>
                                                                        <td>Основание</td>
                                                                        <td>Поступления</td>
                                                                        <td>Расходы</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">1354684646468744964658468658</a>
                                                                        </td>
                                                                        <td><span
                                                                                class="label label-inline label-light-primary font-weight-bold">Уставной
                                                                                капитал</span></td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="[[~11]]">1354684646468744964</a>
                                                                        </td>
                                                                        <td><span
                                                                                class="label label-inline label-light-primary font-weight-bold">ЗП</span>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a
                                                                                href="[[~11]]">13546846464687449645435</a>
                                                                        </td>
                                                                        <td><span
                                                                                class="label label-inline label-light-primary font-weight-bold">Закупки</span>
                                                                        </td>
                                                                        <td>100 000</td>
                                                                        <td>25 000 000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /tab4 -->
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List Widget 14-->
                                        </div>
                                        <div class="col-lg-12">
                                            <!--begin::List Widget 10-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Header-->
                                                <div class="card-header border-0">
                                                    <h3 class="card-title font-weight-bolder text-dark">Платежи по годам
                                                        и месяцам</h3>

                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-0">
                                                    <div class="h4">Платежи за 2020 <small class="text-muted"></small>
                                                    </div>
                                                    <table class="table table-sm table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">Январь</th>
                                                                <th scope="col">Февраль</th>
                                                                <th scope="col">Март</th>
                                                                <th scope="col">Апрель</th>
                                                                <th scope="col">Май</th>
                                                                <th scope="col">Июнь</th>
                                                                <th scope="col">Июль</th>
                                                                <th scope="col">Август</th>
                                                                <th scope="col">Сентябрь</th>
                                                                <th scope="col">Октябрь</th>
                                                                <th scope="col">Ноябрь</th>
                                                                <th scope="col">Декабрь</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">3133543543535453343
                                                                </td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">
                                                                    313367469774678688766</td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="h4">Платежи за 2019</div>
                                                    <table class="table table-sm table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">Январь</th>
                                                                <th scope="col">Февраль</th>
                                                                <th scope="col">Март</th>
                                                                <th scope="col">Апрель</th>
                                                                <th scope="col">Май</th>
                                                                <th scope="col">Июнь</th>
                                                                <th scope="col">Июль</th>
                                                                <th scope="col">Август</th>
                                                                <th scope="col">Сентябрь</th>
                                                                <th scope="col">Октябрь</th>
                                                                <th scope="col">Ноябрь</th>
                                                                <th scope="col">Декабрь</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">3133543543535453343
                                                                </td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">
                                                                    313367469774678688766</td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="h4">Платежи за 2018</div>
                                                    <table class="table table-sm table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">Январь</th>
                                                                <th scope="col">Февраль</th>
                                                                <th scope="col">Март</th>
                                                                <th scope="col">Апрель</th>
                                                                <th scope="col">Май</th>
                                                                <th scope="col">Июнь</th>
                                                                <th scope="col">Июль</th>
                                                                <th scope="col">Август</th>
                                                                <th scope="col">Сентябрь</th>
                                                                <th scope="col">Октябрь</th>
                                                                <th scope="col">Ноябрь</th>
                                                                <th scope="col">Декабрь</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">3133543543535453343
                                                                </td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2" class="align-middle">
                                                                    313367469774678688766</td>
                                                                <td>Поступления</td>
                                                                <td>200000</td>
                                                                <td>300000</td>
                                                                <td>2000000</td>
                                                                <td>100000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                                <td>10000</td>
                                                            </tr>
                                                            <tr class="bg-gray-200">
                                                                <td>Расходы</td>
                                                                <td>20000</td>
                                                                <td>30000</td>
                                                                <td>200000</td>
                                                                <td>10000</td>
                                                                <td>1000</td>
                                                                <td>1000</td>
                                                                <td>100</td>
                                                                <td>1000</td>
                                                                <td>10</td>
                                                                <td>1</td>
                                                                <td>1000000</td>
                                                                <td>100000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end: Card Body-->
                                            </div>
                                            <!--end: Card-->
                                            <!--end: List Widget 10-->
                                        </div>
                                        <div class="col-md-12">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h3 class="card-label">Проекты контрагента</h3>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-12">
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="activ-tab"
                                                                    data-toggle="tab" href="#activ">
                                                                    <span class="nav-icon">
                                                                        <i class="far fa-calendar"></i>
                                                                    </span>
                                                                    <span class="nav-text">Активные</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="closed-tab" data-toggle="tab"
                                                                    href="#closed">
                                                                    <span class="nav-icon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <span class="nav-text">Закрытые</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="all-tab" data-toggle="tab"
                                                                    href="#all">
                                                                    <span class="nav-icon">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                    <span class="nav-text">Все проекты</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content mt-5" id="myTabContent">
                                                            <div class="tab-pane fade active show" id="activ"
                                                                role="tabpanel" aria-labelledby="activ_tab">
                                                                <!-- контент таб1 -->
                                                                <table
                                                                    class="table table-sm table-bordered table-vertical-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Название проекта</th>
                                                                            <th scope="col">Сумма</th>
                                                                            <th scope="col">Поступления</th>
                                                                            <th scope="col">Затраты</th>
                                                                            <th scope="col">Отчеты</th>
                                                                            <th scope="col">Заказчик</th>
                                                                            <th scope="col">Договор</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-calendar-2"></i>
                                                                                начало окончание</th>
                                                                            <th scope="col">Статус</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-users"></i></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td rowspan="2">2</td>
                                                                            <td rowspan="2"><a
                                                                                    href="[[~17]]">Проект1</a></td>
                                                                            <td>1000</td>
                                                                            <td>1000</td>
                                                                            <td>500</td>
                                                                            <td>200</td>
                                                                            <td><a href="[[~10]]">Заказчик2</a></td>
                                                                            <td rowspan="2"><a href="[[~10]]">Наша
                                                                                    компания2</a></td>
                                                                            <td rowspan="2">10.01.2020
                                                                                <hr>10.12.2020
                                                                            </td>
                                                                            <td rowspan="2"><span
                                                                                    class="label label-inline label-light-danger font-weight-bold">В
                                                                                    работе</span></td>
                                                                            <td rowspan="2">
                                                                                <a href="[[~7]]">Сотрудник1</a>
                                                                                <a href="[[~7]]">Сотрудник2</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5">Описание проекта Описание
                                                                                проекта Описание проекта Описание
                                                                                проекта Описание проекта</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- /контент таб1 -->
                                                            </div>
                                                            <div class="tab-pane fade" id="closed" role="tabpanel"
                                                                aria-labelledby="closed-tab">
                                                                <!-- контент таб2 -->
                                                                <table
                                                                    class="table table-sm table-bordered table-vertical-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Название проекта</th>
                                                                            <th scope="col">Сумма</th>
                                                                            <th scope="col">Поступления</th>
                                                                            <th scope="col">Затраты</th>
                                                                            <th scope="col">Отчеты</th>
                                                                            <th scope="col">Заказчик</th>
                                                                            <th scope="col">Договор</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-calendar-2"></i>
                                                                                начало окончание</th>
                                                                            <th scope="col">Статус</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-users"></i></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td rowspan="2">1</td>
                                                                            <td rowspan="2"><a
                                                                                    href="[[~17]]">Проект1</a></td>
                                                                            <td>1000</td>
                                                                            <td>1000</td>
                                                                            <td>500</td>
                                                                            <td>200</td>
                                                                            <td><a href="[[~10]]">Заказчик1</a></td>
                                                                            <td rowspan="2"><a href="[[~10]]">Наша
                                                                                    компания</a></td>
                                                                            <td rowspan="2">10.01.2020
                                                                                <hr>10.12.2020
                                                                            </td>
                                                                            <td rowspan="2"><span
                                                                                    class="label label-inline label-light-success font-weight-bold">Закрыт</span>
                                                                            </td>
                                                                            <td rowspan="2">
                                                                                <a href="[[~7]]">Сотрудник1</a>
                                                                                <a href="[[~7]]">Сотрудник2</a>
                                                                                <a href="[[~7]]">Сотрудник3</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5">Описание проекта Описание
                                                                                проекта Описание проекта Описание
                                                                                проекта Описание проекта</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- /контент таб2 -->
                                                            </div>
                                                            <div class="tab-pane fade" id="all" role="tabpanel"
                                                                aria-labelledby="all-tab">
                                                                <!-- контент таб3 -->
                                                                <table
                                                                    class="table table-sm table-bordered table-vertical-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Название проекта</th>
                                                                            <th scope="col">Сумма</th>
                                                                            <th scope="col">Поступления</th>
                                                                            <th scope="col">Затраты</th>
                                                                            <th scope="col">Отчеты</th>
                                                                            <th scope="col">Заказчик</th>
                                                                            <th scope="col">Договор</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-calendar-2"></i>
                                                                                начало окончание</th>
                                                                            <th scope="col">Статус</th>
                                                                            <th scope="col"><i
                                                                                    class="flaticon-users"></i></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td rowspan="2">1</td>
                                                                            <td rowspan="2"><a
                                                                                    href="[[~17]]">Проект1</a></td>
                                                                            <td>1000</td>
                                                                            <td>1000</td>
                                                                            <td>500</td>
                                                                            <td>200</td>
                                                                            <td><a href="[[~10]]">Заказчик1</a></td>
                                                                            <td rowspan="2"><a href="[[~10]]">Наша
                                                                                    компания</a></td>
                                                                            <td rowspan="2">10.01.2020
                                                                                <hr>10.12.2020
                                                                            </td>
                                                                            <td rowspan="2"><span
                                                                                    class="label label-inline label-light-success font-weight-bold">Закрыт</span>
                                                                            </td>
                                                                            <td rowspan="2">
                                                                                <a href="[[~7]]">Сотрудник1</a>
                                                                                <a href="[[~7]]">Сотрудник2</a>
                                                                                <a href="[[~7]]">Сотрудник3</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5">Описание проекта Описание
                                                                                проекта Описание проекта Описание
                                                                                проекта Описание проекта</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">2</td>
                                                                            <td rowspan="2"><a
                                                                                    href="[[~17]]">Проект1</a></td>
                                                                            <td>1000</td>
                                                                            <td>1000</td>
                                                                            <td>500</td>
                                                                            <td>200</td>
                                                                            <td><a href="[[~10]]">Заказчик2</a></td>
                                                                            <td rowspan="2"><a href="[[~10]]">Наша
                                                                                    компания2</a></td>
                                                                            <td rowspan="2">10.01.2020
                                                                                <hr>10.12.2020
                                                                            </td>
                                                                            <td rowspan="2"><span
                                                                                    class="label label-inline label-light-danger font-weight-bold">В
                                                                                    работе</span></td>
                                                                            <td rowspan="2">
                                                                                <a href="[[~7]]">Сотрудник1</a>
                                                                                <a href="[[~7]]">Сотрудник2</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5">Описание проекта Описание
                                                                                проекта Описание проекта Описание
                                                                                проекта Описание проекта</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- /контент таб3 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Card-->
                                        </div>

                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Advance Table: Widget 7-->
                                    <div class="card card-custom gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Наличные</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Поступления
                                                    и расходы сотрудники</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="h5">Поступления - <small
                                                        class="font-size-sm">12153131₽</small> Рсход - <small
                                                        class="font-size-sm">574844₽</small></div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr class="text-left text-uppercase">
                                                            <th style="">Дата</th>
                                                            <th style="min-width: 100px">Счет</th>
                                                            <th style="">Поступление</th>
                                                            <th style="">Расход</th>
                                                            <th style="min-width: 100px">Сотрудник</th>
                                                            <th style="">Основание</th>
                                                            <th style="">Основание выписка</th>
                                                            <th style="min-width: 100px">Примечание</th>
                                                            <th style="min-width: 80px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-bold">10.09.2020</span>
                                                            </td>
                                                            <td>
                                                                <small>3135347643654646874</small>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">32135453</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                                            </td>
                                                            <td>
                                                                <a href="#">
                                                                    <span class="text-info">Сотрудник1</span>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="label label-inline label-light-primary font-weight-bold">ЗП</span>
                                                            </td>
                                                            <td>
                                                                <small>Поступления займов от учередителя возвратный
                                                                    150000.00</small>
                                                            </td>
                                                            <td>
                                                                <span class="">примечание</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a type="button"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning"
                                                                    data-toggle="modal" data-target="#modal-user-cash">
                                                                    <i class="flaticon-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-bold">10.09.2020</span>
                                                            </td>
                                                            <td>
                                                                <small>3135347643654646874</small>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">32135453</span>
                                                            </td>
                                                            <td>
                                                                <a href="#">
                                                                    <span class="text-info">Сотрудник2</span>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="label label-inline label-light-primary font-weight-bold">Уставной
                                                                    капитал</span>
                                                            </td>
                                                            <td>
                                                                <small>какое то основание из выписки банка</small>
                                                            </td>
                                                            <td>
                                                                <span class="">примечание</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a type="button"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning"
                                                                    data-toggle="modal" data-target="#modal-user-cash">
                                                                    <i class="flaticon-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Advance Table Widget 7-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Profile Overview-->

                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>


                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark">
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    [[$User_Panel?]]
    <!-- end::User Panel-->
    <!--begin::Scrolltop-->
    [[$Scrolltop?]]
    <!--end::Scrolltop-->
    @include("layout.scripts")

    <!-- расход для сотрудника modal-user-cash -->
    [[$modal-user-cash?]]

    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <script src="assets/js/pages/custom/profile/profile.js"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
