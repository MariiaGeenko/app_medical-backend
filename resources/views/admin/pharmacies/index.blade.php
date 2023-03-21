@extends('layouts.admin')

@section('title', 'Админка аптек')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Аптеки</h1>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-sm btn-outline-secondary" href="{{route('admin.pharmacies.create')}}">Добавить аптеку</a>
    </div>
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
          <th>Адрес</th>       
          <th>Телефон</th>
          <th>E-mail</th>
          <th>Дата добавления</th>
          <th>Дата изменения</th>
          <th>Статус</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($pharmaciesList as $pharmacy)
        <tr>
          <td>{{ $pharmacy->id }}</td>
          <td>{{ $pharmacy->address }}</td>  
          <td>{{ $pharmacy->phone }}</td>
          <td>{{ $pharmacy->email }}</td>
          <td>{{ $pharmacy->created_at }}</td>
          <td>{{ $pharmacy->updated_at }}</td>
          {{-- <td>{{ $pharmacy->status }}</td> --}}
          {{-- <td><a href="{{route('admin.pharmacies.edit', $pharmacy->id)}}">Изм.</a> &nbsp; <a href="javascript:;" class="delete" rel="{{ $pharmacy->id }}" style=" color: red;">Уд.</a></td> --}}
          {{-- <td><a href="#">Изм.</a> &nbsp; <a href="#">Вкл.</a> &nbsp; <a href="#" class="delete" style=" color: red;">Выкл.</a></td>--}}
        </tr>            
        @empty
        <tr>
          <td colspan="7">Записей нет</td>
        </tr>            
        @endforelse
      </tbody>

    </table>

    {{-- {{ $pagesList->links() }} --}}

  </div>

@endsection


