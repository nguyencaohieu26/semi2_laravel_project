@extends('layouts.LayoutPublic')
@section('page-title','Blog')
@section('content')
    {{--    ========= header ========--}}
    <header class="blog__header">
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <h1 class="text-capitalize mb-0 font-weight-bold">blog</h1>
                </div>
            </div>
        </div>
    </header>
    {{--========== End header =========--}}
    {{--    ========== Blog main ===========--}}
    <section class="blog__main mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {{-- post 7 --}}
                    <div class="about__title mb-5">
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">Fully researched data and enterprise process
                                    improvements</h2>
                                <p class="post__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quod idem cum vestri faciant, non satis magnam tribuunt inventoribus gratiam. Bonum
                                    negas esse divitias, praeposìtum esse dicis? Duo Reges: constructio interrete. Quae
                                    cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequi; Luxuriam non
                                    reprehendit, modo sit vacua infinita cupiditate et timore. Beatus sibi videtur esse
                                    moriens. Non potes, nisi retexueris… </p>
                                <p class="blog__link--detail">
                                    <a href="#" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post 8 --}}
                    <div class="about__title mb-5">
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">Seamlessly visualize quality intellectual capital without
                                    superior collaboration</h2>
                                <p class="post__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fortasse id optimum, sed ubi illud: Plus semper voluptatis? Quid autem habent
                                    admirationis, cum prope accesseris? Id est enim, de quo quaerimus. Quis animo aequo
                                    videt eum, quem inpure ac flagitiose putet vivere? Duo Reges: constructio interrete.
                                    Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Sed ego…</p>
                                <p class="blog__link--detail">
                                    <a href="#" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{--Pagination--}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination__hover justify-content-center">
                            {{--                            <li class="page-item disabled">--}}
                            {{--                                <a class="page-link">Previous</a>--}}
                            {{--                            </li>--}}
                            <li class="page-item next__hover">
                                <a class="page-link link__hover" href="{{asset('blog')}}">
                                    <i class="fa-solid fa-angles-left pr-1 blog__icon--fz"></i>Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link link__hover" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="{{asset('blog_page2')}}">2</a>
                            </li>
                        </ul>
                    </nav>
                    {{-- End Pagination --}}
                </div>
            </div>
        </div>
    </section>
    {{--    ========= End Blog ========--}}
@endsection
@section('script-tag')
@endsection
