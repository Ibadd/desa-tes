<div class="card mb-3">
    <div class="card-header pb-0">
        <h5>Berita terbaru</h5>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-6 mb-3">
                    <div class="card">
                        <a href="/{{ $post->slug }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Baca selengkapnya">
                            <img src="{{ asset('/assets/img/generic/5.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            {{-- <div class="row justify-content-between align-items-center"> --}}
                            <div class="col">
                                <div class="d-flex">
                                <div class="calendar me-2"><span class="calendar-month">{{ $post->created_at->isoFormat('MMM')
                  }}</span><span class="calendar-day">{{ $post->created_at->isoFormat('D') }} </span>
              </div>
                                    <div class="flex-1 fs--1">
                                        <h5 class="fs-0"><a href="/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                        <p class="mb-0">by <a href="#!" class="text-decoration-none">author Now</a> &bull; 11 hrs </p>
                                        <a href="" class="fs-0 text-warning fw-semi-bold">category</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-auto d-none d-md-block">
                                <button class="btn btn-falcon-default btn-sm px-4" type="button">Register</button>
                            </div>
                        </div> --}}
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <div class="card-footer">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
