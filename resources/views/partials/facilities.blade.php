<div class="container my-5">
    <h2 class="text-center mb-4">Fasilitas Kami</h2>
    <div class="row text-center">
        @foreach($facilities as $facility)
            <div class="col-md-3 facility-item">
                <i class="{{ $facility->icon }} fa-3x icon-animate"></i>
                <h5 class="mt-3">{{ $facility->name }}</h5>
            </div>
        @endforeach
    </div>
</div>
