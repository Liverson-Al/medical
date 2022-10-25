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
        Пол - Хз короче как нормально передавать значение 1 или 0, пытался нагуглить, но чёт уже подзаебался
        <div class="form-check">
            <input class="form-check-input1" type="radio" value='1' name="Sex" id="Sex1" checked>
            <label class="form-check-label" for="Sex1">
                Мужской
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input2" type="radio" value='0' name="Sex" id="Sex0">
            <label class="form-check-label" for="Sex0">
                Женский
            </label>
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
