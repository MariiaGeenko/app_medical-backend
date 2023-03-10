@extends('layouts.admin')

@section('title', 'Админка лекарств')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Лекарства</h1>
    {{-- <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-sm btn-outline-secondary" href="{{route('admin.drugs.create')}}">Добавить лекарство</a>
    </div> --}}
    <div class="btn-toolbar mb-2 mb-md-0">
      {{-- <div class="btn-group mr-2">
        <button class="btn btn-sm btn-outline-secondary">Share</button>
        <button class="btn btn-sm btn-outline-secondary">Export</button>
      </div> --}}
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Название</th>       
          <th>Описание</th>
          <th>Дата добавления</th>
          <th>Дата изменения</th>
          <th>Статус</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        {{-- @forelse ($drugsList as $drug)
        <tr>
          <td>{{ $drug->id }}</td>
          <td>{{ $drug->title }}</td>  
          <td>{{ $drug->description }}</td>
          <td>{{ $drug->created_at }}</td>
          <td>{{ $drug->updated_at }}</td>
          <td>{{ $drug->status }}</td>
          {{-- <td><a href="{{route('admin.drugs.edit', $drug->id)}}">Изм.</a> &nbsp; <a href="javascript:;" class="delete" rel="{{ $drug->id }}" style=" color: red;">Уд.</a></td> --}}
          {{-- <td><a href="#">Изм.</a> &nbsp; <a href="#">Вкл.</a> &nbsp; <a href="#" class="delete" style=" color: red;">Выкл.</a></td>
        </tr>            
        @empty
        <tr>
          <td colspan="7">Записей нет</td>
        </tr>            
        @endforelse --}}
      </tbody>

    </table>

    {{-- {{ $pagesList->links() }} --}}

  </div>

@endsection



