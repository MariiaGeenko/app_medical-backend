@extends('layouts.admin')

@section('title', 'Добавить пациента')
@section('content')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Добавить пациента</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="{{route('admin.patients.index')}}">Назад к списку пациентов</a>
      </nav>
      <div class="btn-group mr-2">
        {{-- <button class="btn btn-sm btn-outline-secondary">Share</button>
        <button class="btn btn-sm btn-outline-secondary">Export</button> --}}
      </div>
    </div>
  </div>
  <div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>                       
        @endforeach
    @endif
    <form method="POST" action="{{route('admin.patients.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}">
        </div>
        <div class="form-group">
            <label for="surname">Фамилия</label>
            <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname')}}">
        </div>
        <div class="form-group">
            <label for="barcode">Штрихкод</label>
            <input type="text" id="barcode" name="barcode" class="form-control @error('barcode') is-invalid @enderror" value="{{ old('barcode')}}">
        </div>
        <div class="form-group">
            <label for="medical_card_stored_in_clinic_id">Номер медицинской карты</label>
            <input type="text" id="medical_card_stored_in_clinic_id" name="medical_card_stored_in_clinic_id" class="form-control @error('medical_card_stored_in_clinic_id') is-invalid @enderror" value="{{ old('medical_card_stored_in_clinic_id')}}">
        </div>
        <div class="form-group">
          <label for="insurance">Страховка</label>
          <input type="text" id="insurance" name="insurance" class="form-control @error('insurance') is-invalid @enderror" value="{{ old('insurance')}}">
        </div>

        <div class="form-group">
        <label for="status">Статус</label>
        <select class="form-control" name="status" id="status">
          @foreach($statuses as $status)
          <option @if(old('status') === $status) selected @endif>{{ $status }}</option>
          @endforeach
        </select>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Сохранить</button>

    </form>
  </div>

  @endsection('content')