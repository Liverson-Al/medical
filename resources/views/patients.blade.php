@extends('layouts.layout')

@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Пациент</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Возраст</th>
                <th scope="col">Пол</th>
                <th scope="col">Регион</th>
                <th scope="col">Телефонный номер</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                <div>
                    <tr>
                        <th scope="row">{{ $patient->id }}</th>
                        <td>{{ $patient->PatientSurname }} {{ $patient->PatientName }} </td>
                        <td>{{ $patient->BirthDate }}</td>
                        <td>{{ $patient->BirthDate }}</td>
                        <td>{{ $patient->Sex }}</td>
                        <td>{{ $patient->ResidenceRegion }}</td>
                        <td>{{ $patient->PhoneNumber }}</td>
                    </tr>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
