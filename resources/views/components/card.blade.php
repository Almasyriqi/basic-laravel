<div class="card" style="width: 300; float: left; margin: 40px;">
    @if ($image)
        <img src="/images/{{$image}}.jpg" alt="gambar" width="300" height="300">
    @endif
    
    <div class="card-body">
        <h5 class="card-title">
            {{ $title ?? '' }}
        </h5>
        <p class="card-text">
            {{ $slot ?? '' }}
        </p>
    </div>
</div>