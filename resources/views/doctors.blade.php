@extends('layouts.layout')

@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ФИО</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Учреждение</th>
                <th scope="col">Профиль</th>
                <th scope="col">Роль</th>
                <th scope="col">ID</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doctors as $doctor)
                <div>
                    <tr>
                        <td>{{ $doctor->Surname }} {{ $doctor->Name }} {{$doctor->Patronymic}} </td>
                        <td>{{ $doctor->BirthDate }}</td>
                        <td>{{ $doctor->PlaceOfWork_id }}</td>
                        <td>{{ $doctor->Occupation_id }}</td>
                        <td>{{ $doctor->Role_id }}</td>
                        <th scope="row">{{ $doctor->id }}</th>
                    </tr>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
