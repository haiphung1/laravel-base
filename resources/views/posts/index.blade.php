@extends('layouts.master')
@section('title', 'Danh sách bài viết')
@section('content')
{{-- <a href="{{ url('admin/post/create') }}" class="btn btn-success">Thêm mới</a> --}}
<a href="{{ route('posts.create') }}" class="btn btn-success">Thêm mới</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $key => $post)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->desc }}</td>
                <td>
                    @if ($post->status == 1)
                        <span class="badge badge-primary">Hoạt động</span>
                    @else
                        <span class="badge badge-warning">Không hoạt động</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn-info btn-sm">Sửa</a>
                    <a href="" class="btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
        @empty
            <h1>Không có bản ghi nào</h1>
        @endforelse
    </tbody>
</table>
@endsection
