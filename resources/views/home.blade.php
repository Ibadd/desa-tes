@extends('layouts/master')

@section('content')
    @include('home.crousal')
    <div class="row g-3">
        <div class="col-lg-8">
            @include('home.category')


            @include('home.jadwal-sholat')

            {{-- list berita terbaru --}}
            @include('home.berita')


            <div class="card mb-3">
                <div class="card-header bg-light">
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="d-flex">
                                <div class="avatar avatar-2xl status-online">
                                    <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />

                                </div>
                                <div class="flex-1 align-self-center ms-2">
                                    <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> shared an <a href="#!">album</a></p>
                                    <p class="mb-0 fs--1">11 hrs &bull; Consett, UK &bull; <span class="fas fa-globe-americas"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown font-sans-serif">
                                <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body overflow-hidden">
                    <p>Rowan Sebastian Atkinson CBE is an English actor, comedian and screenwriter best known for his work on the sitcoms Blackadder and Mr. Bean.</p>
                    <div class="row mx-n1">
                        <div class="col-6 p-1"><a href="../../assets/img/generic/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/4.jpg" alt="" /></a></div>
                        <div class="col-6 p-1"><a href="../../assets/img/generic/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/5.jpg" alt="" /></a></div>
                        <div class="col-4 p-1"><a href="../../assets/img/gallery/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/4.jpg" alt="" /></a></div>
                        <div class="col-4 p-1"><a href="../../assets/img/gallery/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/5.jpg" alt="" /></a></div>
                        <div class="col-4 p-1"><a href="../../assets/img/gallery/3.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/3.jpg" alt="" /></a></div>
                    </div>
                </div>
                <div class="card-footer bg-light pt-0">
                    <div class="border-bottom border-200 fs--1 py-3"><a class="text-700" href="#!">345 Likes</a> &bull; <a class="text-700" href="#!">34 Comments</a>
                    </div>
                    <div class="row g-0 fw-semi-bold text-center py-2 fs--1">
                        <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-active.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                        <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-active.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                        <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                    </div>
                    <form class="d-flex align-items-center border-top border-200 pt-3">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />

                        </div>
                        <input class="form-control rounded-pill ms-2 fs--1" type="text" placeholder="Write a comment..." />
                    </form>
                    <div class="d-flex mt-3">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />

                        </div>
                        <div class="flex-1 ms-2 fs--1">
                            <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
                            <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />

                        </div>
                        <div class="flex-1 ms-2 fs--1">
                            <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆</p>
                            <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 3hrs </div>
                        </div>
                    </div><a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
                </div>
            </div>
            <div class="card mb-3">
                <img class="card-img-top" src="../../assets/img/generic/13.jpg" alt="" />
                <div class="card-body overflow-hidden">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="d-flex">
                                <div class="calendar me-2"><span class="calendar-month">Dec</span><span class="calendar-day">31 </span></div>
                                <div class="flex-1 fs--1">
                                    <h5 class="fs-0"><a href="../../app/events/event-detail.html">FREE New Year's Eve Midnight Harbor Fireworks</a></h5>
                                    <p class="mb-0">by <a href="#!">Boston Harbor Now</a></p><span class="fs-0 text-warning fw-semi-bold">$49.99 – $89.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-auto d-none d-md-block">
                            <button class="btn btn-falcon-default btn-sm px-4" type="button">Register</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light pt-0">
                    <div class="row g-0 fw-semi-bold text-center py-2 fs--1">
                        <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-inactive.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                        <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-inactive.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                        <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                    </div>
                    <form class="d-flex align-items-center border-top border-200 pt-3">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />

                        </div>
                        <input class="form-control rounded-pill ms-2 fs--1" type="text" placeholder="Write a comment..." />
                    </form>
                </div>
            </div>
        </div>
        {{-- sebelah kanan --}}
        <div class="col-lg-4">
            {{-- slide info teks gerak --}}
            @include('home.info')

            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
            </div>
            {{-- identitas desa & pemerintahan desa --}}
            @include('home.identitas-desa')

            {{-- aparatur desa --}}
            @include('home.aparatur-desa')


            <div class="card mb-3">
                <div class="card-header bg-light text-center">
                    <h5 class="mb-0">Lokasi Desa</h5>
                </div>
                <div class="card-body d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15817.103646430198!2d112.59092866984761!3d-7.6534531450708485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877c12d422c3d%3A0x29c41b1b7a4abe19!2sTamiajeng%2C%20Kec.%20Trawas%2C%20Kabupaten%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1649477299658!5m2!1sid!2sid" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-light text-center">
                    <h5 class="mb-0">Lokasi Kantor Desa</h5>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.13983854923754!2d112.59935550021558!3d-7.657602802849979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877c1cbc51075%3A0x23ca62c408cc1031!2sBalai%20Desa%20Tamiajeng!5e0!3m2!1sid!2sid!4v1649479174819!5m2!1sid!2sid" width="346" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-light">
                    <h5 class="mb-0">You may interested</h5>
                </div>
                <div class="card-body fs--1">
                    <div class="d-flex btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                        <div class="flex-1 position-relative ps-3">
                            <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Newmarket Nights</a></h6>
                            <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                            <p class="text-1000 mb-0">Time: 6:00AM</p>
                            <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                            <div class="border-dashed-bottom my-3"></div>
                        </div>
                    </div>
                    <div class="d-flex btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                        <div class="flex-1 position-relative ps-3">
                            <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">31st Night Celebration</a></h6>
                            <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                            <p class="text-1000 mb-0">Time: 11:00PM</p>
                            <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                            <div class="border-dashed-bottom my-3"></div>
                        </div>
                    </div>
                    <div class="d-flex btn-reveal-trigger">
                        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                        <div class="flex-1 position-relative ps-3">
                            <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Folk Festival</a></h6>
                            <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
                            <p class="text-1000 mb-0">Time: 9:00AM</p>
                            <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light p-0 border-top"><a class="btn btn-link d-block w-100" href="../../app/events/event-list.html">All Events<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
        </div>
    </div>
@endsection
