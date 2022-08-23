<!--Jumbotron-->
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">{{$title ?? 'Custom Jumbotron'}}</h1>
        <p class="col-md-8 fs-4">{{$slot ?? 'Selamat Datang'}}</p>
        <a class="btn btn-primary btn-lg" href="/about" type="button">About</a>
    </div>
</div>
<!--End Jumbotron-->