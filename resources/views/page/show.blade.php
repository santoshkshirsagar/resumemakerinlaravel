@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <?php echo $page->content; ?>
    </div>
@endsection