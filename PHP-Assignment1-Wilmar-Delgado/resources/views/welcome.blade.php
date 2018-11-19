@extends ('layout')

@section ('content')
<div class="container flex"> 
    <div class="stories">
        <?php foreach ($posts as $post): ?>
            @include('posts')
        <?php endforeach; ?>
    </div>
        @include('aside')
    </div>
@endsection
