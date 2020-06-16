<!DOCTYPE html>
<html>
<head>
  <title>List of posts</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

  <section class="container-fluid">
    <h1>List of posts</h1>
    @foreach($posts as $post)
    <div class="border border-primary">
      <h3>{{ $post->heading }}</h3>
      <p>{{ $post->body }}</p>
      <a href="{{ route('post.show', ['id' => $post->id]) }}">Details</a>
    </div>
    @endforeach
  </section>

  <section class="container-fluid">
    <h1>New post</h1>
    <form action="{{ route('post.store') }}" method="post" class="form">
      @csrf
      <div class="form-group">
        <label>Heading</label>
        <input type="text" name="heading" class="form-control">
      </div>

      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      
    </form>
  </section>


<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>