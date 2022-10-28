@extends('layouts.layout')

@section('content')
    <form action="{{ route('patients.store') }}" method="post">
        @csrf
        <div class="input-group">
            <span class="input-group-text">ФИО</span>
            <input type="text" id="PatientSurname" class="form-control" placeholder="Фамилия">
            <input type="text" id="PatientName" class="form-control" placeholder="Имя">
            <input type="text" id="PatientPatronymic" class="form-control" placeholder="Отчество">
        </div>
        <div class="form-group">
            <label for="BirthDate">Введите дату рожения</label>
            <input type="date" id="BirthDate" class="form-control">
        </div>
        <div class="form-group">
            Выберите пол
            <select class="form-select" aria-label="Default select example">
                <option selected>Пол</option>
                <option value="1">Мужской</option>
                <option value="0">Женский</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="PhoneNumber" class="form-label">Телефонный номер</label>
            <input type="string" class="form-control" id="PhoneNumber" placeholder="+71234567890">
        </div>
        <div class="mb-3">
            <label for="ResidenceRegion" class="form-label">Мед. Учреждение НУ В ЦЕЛОМ ОНО ДОЛЖНО ПРИХОДИТЬ ИЗ ТАБЛИЦЫ ВИЗИТА, НО ПУСКАЙ БУДЕТ</label>
            <input type="string" class="form-control" id="ResidenceRegion" placeholder="SPb">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
