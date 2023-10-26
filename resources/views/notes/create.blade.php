@extends('template.main')

@section('content')
  <form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" id="title" name="title" class="form-control">
      @error('title')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
      @error('body')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="owner" class="form-label">Owner</label>
      <input type="text" id="owner" name="owner" class="form-control">
      @error('owner')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection