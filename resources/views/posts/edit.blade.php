@extends('layouts.master')
@section('title', 'Chỉnh sửa')
@section('content')
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        <div class="form-group">
            <label>Tiêu đề <span class="text-danger">(*)</span></label>
            <input value="{{ old('title', $post->title) }}" type="text" name="title"
                class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Mô tả <span class="text-danger">(*)</span></label>
            <input value="{{ old('desc', $post->desc) }}" type="text" name="desc"
                class="form-control @error('desc') is-invalid @enderror">
            @error('desc')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="status" value="1" {{ $post->status == 1 ? 'checked' : ''}} class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Hoạt động</label>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        <a href="{{ route("posts.index") }}" class="btn btn-danger">Trở lại</a>
    </form>
@endsection
