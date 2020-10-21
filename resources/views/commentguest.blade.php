@extends('home')
@section('content')
<h2>comment guest</h2>

<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>website</th>
        <th>comment</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comment1 as $post)
        <tr>
          <td>{{ $post->name }}</td>
          <td>{{ $post->email }}</td>
          <td>{{ $post->website }}</td>
          <td>{{ $post->website }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
  
@endsection

