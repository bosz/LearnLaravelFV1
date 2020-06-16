<!DOCTYPE html>
<html>
<head>
  <title>{{ $post->heading }}</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

  {{-- <section class="container-fluid">
    <h1>List of posts</h1>
    @foreach($posts as $post)
    <div class="border border-primary">
      <h3>{{ $post->heading }}</h3>
      <p>{{ $post->body }}</p>
      <a href="{{ route('post.show', ['id' => $post->id]) }}">Details</a>
    </div>
    @endforeach
  </section> --}}
  <section class="container">
    <div class=" bg bg-secondary text p-5">
      <h3>{{ $post->heading }}</h3>
      <p>{{ $post->body }}</p>
    </div>

    <div class="p-5">
      <h3>Comments</h3>
      @forelse($post->comments as $comment)
      <div class="bg bg-light p-3 border border-secondary">
        <h5>{{ $comment->comment }}</h5>
        <p>{{ $comment->created_at->format('Y M d @ h:i') }}</p>
      </div>
      @empty
      <p class="text text-danger">No comment yet, be the first to leave a comment...</p>
      @endforelse
    </div>
  </section>

  <section class="container p-5">
    <h1>Leave a comment</h1>
    <form action="{{ route('post.comment.store', ['id' => $post->id]) }}" method="post" class="form">
      @csrf
      <div class="form-group">
        <label>Comment</label>
        <textarea name="body" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
    </form>
  </section>


<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>