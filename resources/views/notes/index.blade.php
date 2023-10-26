@extends('template.main')

@section('content')
  <a href="{{ route('notes.create') }}" class="mb-3">Buat Catatan</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Owner</th>
        <th>Aksi</th>
      </tr>
    </thead>
  </table>
@endsection