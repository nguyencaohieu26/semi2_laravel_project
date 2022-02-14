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
                    {{--post 1--}}
                    <div class="about__title mb-5">
                        <div class="blog__post--image">
                            <img class="w-100"
                                 src="https://bidpro.webdevia.com/nft-marketplace/wp-content/uploads/sites/4/2021/09/nft-13-1066x500.jpg">
                        </div>
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">keeping yourself safe when buying NFTs in 2022</h2>
                                <p class="post__content--text">Apparently we had reached a great height in the
                                    atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By
                                    the same illusion which lifts the horizon of the sea to the level of the spectator
                                    on a hillside, the sable cloud beneath was dished out, and the car seemed to float
                                    in the middle… </p>
                                <p class="blog__link--detail">
                                    <a href="{{asset('blog_detail')}}" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{--post 2--}}
                    <div class="about__title mb-5">
                        <div class="blog__post--image">
                            <img class="w-100"
                                 src="https://bidpro.webdevia.com/nft-marketplace/wp-content/uploads/sites/4/2018/12/designer-1008x500.jpg">
                        </div>
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">The beginner’s guide to creating & selling digital art
                                    NFTs</h2>
                                <p class="post__content--text">Setting up a Small Office Home Office is not as difficult
                                    to
                                    get started as you may have imagined. If you have a new business idea and need to
                                    work
                                    from home, yet still need to collaborate, then a SoHo solution is for you. However
                                    if
                                    you find even Small Office Home Office business communications a minefield, help is
                                    at… </p>
                                <p class="blog__link--detail">
                                    <a href="#" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{--post 3--}}
                    <div class="about__title mb-5">
                        <div class="blog__post--image">
                            <img class="w-100"
                                 src="https://bidpro.webdevia.com/nft-marketplace/wp-content/uploads/sites/4/2018/12/flower-1008x500.jpg">
                        </div>
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">How to Improve Customer Journey for Better Experience</h2>
                                <p class="post__content--text">Setting up a Small Office Home Office is not as difficult
                                    to
                                    get started as you may have imagined. If you have a new business idea and need to
                                    work
                                    from home, yet still need to collaborate, then a SoHo solution is for you. However
                                    if
                                    you find even Small Office Home Office business communications a minefield, help is
                                    at… </p>
                                <p class="blog__link--detail">
                                    <a href="#" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post 4 --}}
                    <div class="about__title mb-5">
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">Quickly deploy strategic networks with compelling</h2>
                                <p class="post__content--text">Our smart media phone that provides an enriched HD audio
                                    video calling experience for business professionals. Change the way your office
                                    communicates with video communication that increases productivity and enhances
                                    communication with the ease of a standard phone. Communicate face-to-face with your
                                    colleagues, even across different locations. Minime vero, inquit ille, consentit.
                                    Naturales divitias dixit parabiles esse, quod parvo esset natura contenta. Et…</p>
                                <p class="blog__link--detail">
                                    <a href="#" class="text-capitalize font-weight-bold text-muted">read more
                                        <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post 5 --}}
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
                    {{-- post 6 --}}
                    <div class="about__title mb-5">
                        <div class="blog__post--content py-4 px-3">
                            <ul class="post__list list-unstyled">
                                <li class="d-inline-block pr-2">december 28, 2018</li>
                                <li class="d-inline-block px-2">By: Alex Ali</li>
                                <li class="d-inline-block px-2">Freebies, News</li>
                                <li class="d-inline-block px-2">3 comments</li>
                            </ul>
                            <div class="post__content--heading">
                                <h2 class="font-weight-bold">Professionally cultivate one-to-one customer service</h2>
                                <p class="post__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Amicitiam autem adhibendam esse censent, quia sit ex eo genere, quae prosunt. Quo
                                    modo autem optimum, si bonum praeterea nullum est? Vitae autem degendae ratio maxime
                                    quidem illis placuit quieta. Duo Reges: constructio interrete. Ita multo sanguine
                                    profuso in laetitia et in victoria est mortuus. Quare conare, quaeso. Itaque contra
                                    est, ac… </p>
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
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link link__hover" href="{{asset('blog_page2')}}">2</a></li>
                            <li class="page-item next__hover">
                                <a class="page-link link__hover" href="{{asset('blog_page2')}}">Next
                                    <i class="fa-solid fa-angles-right blog__icon--fz"></i></a>
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
