@extends('home')
@section('content')
<h2>content post</h2>

<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>title</th>
        <th>slug</th>
        <th>content</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($position as $post)
        <tr>
          <td>{{ $post->position->name }}</td>
          <td>{{ $post->position->email }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->content }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
  
@endsection

