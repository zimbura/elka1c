@extends('layout.default')
<!--end::Head-->
<!--begin::Body-->
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Параметры расчетов</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="example-number-input" class="">Число месяца</label>
                                    <input class="form-control" type="number" value="25" id="example-number-input" />
                                    <span class="form-text text-muted">Число когда начисляеться оклад сотрудникам. Пример 1
                                        число месяца или 25.</span>
                                </div>
                                <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                                    <div class="alert-text">Обратите внимание что при увольнении сотрудника ему будет
                                        пересчитан его оклад в месяц увольнения. Оклад будет разделён на кол-во дней месяца
                                        увольнения и и это значение умножено на кол-во дней до дня увольнения сотрудника.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Загрузка XML файлов выписки</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('xmlupload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-10">
                                    <label for="formFileMultiple" class="form-label">Загрузка выписок</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    <span class="form-text text-muted">Файлы в формате xml и txt. Название файла англ.
                                        буквами</span>
                                </div>
                                <div class="mb-3 mt-10">
                                    <button type="submit" class="btn btn-light-primary mr-2">Загрузить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-md-12">
                    <!--begin::Card-->
                    {{-- <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Управление отчетами по основаниям платежей</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-custom alert-white shadow-sm fade show" role="alert">
                                <p>Не более 7 оснований для отчетов одновременно. Очень большая нагрузка на базу. Отчеты
                                    показываются <a href="[[~14]]">здесь</a>.</p>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <!-- форма -->
                                    <form class="form">
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                        <!-- основание для отчета -->
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-8 col-sm-12">
                                                        <select class="form-control" name="option" id="">
                                                            <option>Основание 1</option>
                                                            <option>Основание 2</option>
                                                            <option>Основание 3</option>
                                                        </select>
                                                        <span class="form-text text-muted">Выбрать основание из
                                                            списка</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-lg-4  col-sm-12">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox checkbox-success">
                                                                <input type="checkbox" name="">
                                                                <span></span>Создавать отчеты</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /основание для отчета -->
                                    </form>
                                    <!-- / форма -->
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--end::Card-->
                </div>
                {{-- <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Управление основаниями</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div id="kt_repeater_1">
                                    <div class="form-group row">
                                        <label class="col-xl-2 col-lg-2 col-form-label">Основания:</label>
                                        <div data-repeater-list="" class="col-lg-10">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="Название основания" />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="Цвет вкладки" />
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="checkbox-inline">
                                                        <label class="checkbox checkbox-success">
                                                            <input type="checkbox" name="[0][primary][]">
                                                            <span></span>Опубликовано</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:;" data-repeater-delete=""
                                                        class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label text-right"></label>
                                        <div class="col-lg-4">
                                            <a href="javascript:;" data-repeater-create=""
                                                class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>Добавить ещё</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->
                </div> --}}
                <!-- статусы для проектов -->
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Управление статусами проектов</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            @foreach ($projectStatuses as $status)
                                <form action="{{ route('editstatus', $status->id) }}" method="post"
                                    class="form-group row fv-plugins-icon-container">
                                    <div class="col-lg-5">
                                        <label>* Название статуса:</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $status->NameStatusProekt }}" placeholder="Название статуса">
                                        <div class="fv-plugins-message-container"></div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>* №:</label>
                                        <input type="number" class="form-control" value="{{ $status->NumberStatus }}"
                                            name="status_num" id="">
                                        <div class="fv-plugins-message-container"></div>
                                    </div>
                                    @csrf

                                    @php
                                        $roles = str_split($status->AccessStatus);
                                    @endphp
                                    <div class="col-lg-5 form-group">
                                        <label>Доступ к статусу</label>
                                        <div class="checkbox-inline">
                                            <label class="checkbox">
                                                <input type="checkbox" @if (in_array('1', $roles)) checked @endif name="roles[]" value="1">
                                                <span></span>Директор</label>
                                            <label class="checkbox">
                                                <input @if (in_array('2', $roles)) checked @endif type="checkbox" name="roles[]"
                                                    value="2">
                                                <span></span>Менеджер</label>
                                            <label class="checkbox">
                                                <input @if (in_array('3', $roles)) checked @endif type="checkbox" name="roles[]"
                                                    value="3">
                                                <span></span>Сотрудник</label>
                                        </div>
                                        <span class="form-text text-muted">Проект с данным статусом будет доступен
                                            только данным типам сотрудников</span>
                                        <div class="fv-plugins-message-container"></div>
                                    </div>
                                    <button type="submit">Сохранить</button>
                                </form>
                            @endforeach
                            <form action="{{ route('addstatus')}}" method="post"
                                class="form-group row fv-plugins-icon-container">
                                <div class="col-lg-5">
                                    <label>* Название статуса:</label>
                                    <input type="text" class="form-control" name="name"
                                        value="" placeholder="Название статуса">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                <div class="col-lg-2">
                                    <label>* №:</label>
                                    <input type="number" class="form-control" value=""
                                        name="status_num" id="">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                @csrf
                                <div class="col-lg-5 form-group">
                                    <label>Доступ к статусу</label>
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" name="roles[]" value="1">
                                            <span></span>Директор</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="roles[]"
                                                value="2">
                                            <span></span>Менеджер</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="roles[]"
                                                value="3">
                                            <span></span>Сотрудник</label>
                                    </div>
                                    <span class="form-text text-muted">Проект с данным статусом будет доступен
                                        только данным типам сотрудников</span>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                <button type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!-- / статусы для проектов -->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
