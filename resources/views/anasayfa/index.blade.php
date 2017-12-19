@extends('layouts.master')


@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">

<div class="blog-post">
    <h2 class="blog-post-title">Gönderi Başlığı</h2>
    <p class="blog-post-meta"><a href="#">Kullanıcı</a></p>
    <p><img src=""></p>
    <hr>
    <p>Gönderi metni</p>
</div><!-- /.blog-post -->
<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

</div><!-- /.blog-main -->
</div><!-- /.row -->

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module">
        <h4>Kategoriler</h4>
        <ul class="list-unstyled">

            <li><a href="#">Kategori adı</a></li>

        </ul>
    </div>

</aside><!-- /.blog-sidebar -->
</main><!-- /.container -->




@endsection