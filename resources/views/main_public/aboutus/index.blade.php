@extends('layouts.LayoutPublic')
@section('page-title','About Us')
@section('content')
    {{--    ========= header ========--}}
    <header class="about__header">
        <div class="about__banner">
            <img class="about__banner--img"
                 src="https://sothebys-com.brightspotcdn.com/dims4/default/f180bc4/2147483647/strip/true/crop/1920x440+0+96/resize/1440x330!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2Ff0%2F90%2F7ae71d214d108ded0c240534bd1b%2Fabout-us-banner-3.jpg.webrend.1920.350%2520%282%29.jpeg">
        </div>
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <h1 class="text-capitalize mb-0">about us</h1>
                </div>
            </div>
        </div>
    </header>
    {{--========== End header =========--}}

    <section class="container">
{{--        ========== ABOUT MAIN ==============--}}
        <div class="about__main">
{{--            ------- ABOUT INTRODUCE ---------}}
            <div class="about__intro mb-5">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="about__intro--text">
                            <p class=" col-sm-12 letter__spacing">We are a global asset management and disposition company,
                                offering customers end-to-end
                                solutions for buying and selling used heavy equipment, trucks and other assets. How the
                                adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for
                                Passepartout, he thought Mr. Fogg’s manoeuvre simply glorious.</p>
                            <div class="col-sm-12 d-flex mt-5">
                                <div class="about__icon--hammer">
                                    <img style="width: 50px"
                                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvI8Umlok9ALELOGLDosCS5Oh6wMr3HmCkiwsBN8-mnjnBLXa2aQ5skuAm_J4fUC_zXHE&usqp=CAU">
                                </div>
                                <div class="pl-4">
                                    <h3 class="text-capitalize font-weight-bold">online bidding</h3>
                                    <p class="letter__spacing">The modern world is in a continuous movement and people
                                        everywhere are looking for quick, safe means of accessing accurate information.
                                        Prompt information is vital. </p>
                                </div>
                            </div>
                            <div class="col-sm-12 d-flex mt-1">
                                <div class="about__icon--hammer">
                                    <img style="width: 50px"
                                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvI8Umlok9ALELOGLDosCS5Oh6wMr3HmCkiwsBN8-mnjnBLXa2aQ5skuAm_J4fUC_zXHE&usqp=CAU">
                                </div>
                                <div class="pl-4">
                                    <h3 class="text-capitalize font-weight-bold">corporate social responsibility</h3>
                                    <p class="letter__spacing">The modern world is in a continuous movement and people
                                        everywhere are looking for quick, safe means of accessing accurate information.
                                        Prompt information is vital. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about__intro--image">
                            <img class="w-100 h-100" src="https://images.unsplash.com/photo-1514195037031-83d60ed3b448?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80">
                        </div>
                    </div>
                </div>
            </div>
{{--            ------ END ABOUT INTRODUCE --------}}

{{--            ------- ABOUT EXPLORE -----------}}
            <div class="about__explore mb-5">
                <h2 class="about__explore--heading font-weight-bold pb-5">Explore our industries</h2>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://images.unsplash.com/photo-1576495169018-bd2414046c6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFydCUyMHBhaW50aW5nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=700&q=60">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Arts</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://sothebys-com.brightspotcdn.com/dims4/default/58e62fa/2147483647/strip/false/crop/2000x1518+0+0/resize/421x320!/quality/90/?url=https%3A%2F%2Fsothebys-md.brightspotcdn.com%2Fbe%2F11%2Fad4918a74dc695e896a7d380798d%2Fhk1189-bmysm-1-cropped-t3.jpg">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Collectibles</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://sothebys-com.brightspotcdn.com/dims4/default/262c2c9/2147483647/strip/false/crop/2000x1516+0+0/resize/421x319!/quality/90/?url=https%3A%2F%2Fsothebys-md.brightspotcdn.com%2Fa3%2F8a%2F2ee6e7344f38ad0dba4b18535663%2Fhk1189-c3cf5-1-cropped-t3.jpg">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Photography</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://images.unsplash.com/photo-1551732998-9573f695fdbb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fGFydHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=700&q=60">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Sports</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://images.unsplash.com/photo-1640622299541-8c8ab8a098f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MXx8YXJ0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=700&q=60">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Trading Cards</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="explore__items">
                            <div class="explore__items--image">
                                <img class="w-100" src="https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFydHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=700&q=60">
                            </div>
                            <div class="explore__items-text">
                                <h6 class="text-center pt-1">Virtual Worlds</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            --------- END ABOUT EXPLORE ---------}}

            <!--Start Accordion-->
            <div class="about__accordion pt-5">
                <div class="row mb-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="accordion pr-5" id="accordionExample">
                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingOne">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark text-dark" data-toggle="collapse" href="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa-solid fa-minus"></i>
                                            How can I find out what an object is worth?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Click here to find out more</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingTwo">
                                    <h6 class="mb-0 font-weight-bold">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            Where can I find auction results?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-4 letter__spacing">Results are posted online shortly after the close of each
                                            auction session.
                                            <a class="text-decoration-none text-dark text-primary" href="#">View Auction Results</a>
                                        </p>
                                        <p class="mb-4 letter__spacing">You can search for results via the Auction of the site by
                                            selecting 'Results' from the top menu, then 'More Options' to filter your search by
                                            date, location and/or department.</p>
                                        <p class="mb-4 letter__spacing">Alternatively, find a specialist department’s auction
                                            results within the Department area of the site, under its ‘Records & Results’ section.
                                            Here you can easily view a department’s auction results for the past 12 months,
                                            alongside its records and significant sales.</p>
                                        <p class="mb-4 letter__spacing">If you need additional help, please contact Sotheby's
                                            auction results line:</p>
                                        <p class="mb-4 letter__spacing">New York: (212) 606-7901</p>
                                        <p class="mb-5 letter__spacing">London: (44) 207 293 5855</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingThree">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseThree"
                                           aria-expanded="false" aria-controls="collapseThree">
                                            What are the symbols that appear next to the estimates on Lots?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="letter__spacing">And lastly, the placeholder content for the third and final
                                            accordion panel. This panel is hidden by default.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingFour">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseFour"
                                           aria-expanded="false" aria-controls="collapseFour">
                                            How can I find out about Sotheby's auctions and other events?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-4 letter__spacing">Click on Auctions from the top site menu. Here you can view
                                            Sotheby's events in three different ways - in a Timeline, Calendar or List format.</p>
                                        <p class="mb-4 letter__spacing">The auctions calendar allows you to filter your search by
                                            event type, location and department. To do this, simply click on 'More Options' above
                                            the calendar and make your selections. Alternatively, when in List view you can enter
                                            sale title or sale number into the search box provided, and hit Search. Here, you also
                                            have the option to 'Save to Calendar' to download the event to your own calendar.</p>
                                        <p class="mb-3 letter__spacing">
                                            <a class="text-decoration-none text-dark text-primary" href="#">View Auction Calendar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingFive">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseFive"
                                           aria-expanded="false" aria-controls="collapseFive">
                                            How can I access catalogues?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="letter__spacing">Sotheby's catalogues for most sales locations are published
                                            online with full illustrations. You can connect to our e-catalogues from the main
                                            Auction calendar section.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingSix">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseSix"
                                           aria-expanded="false" aria-controls="collapseSix">
                                            Where can I find information on a specialist department?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-4 letter__spacing">Select Departments from the top main menu and view the full
                                            list of Sotheby’s specialist areas by category or alphabetically. Here you will find
                                            department overviews, catalogues, contact information for specialists, upcoming
                                            auctions, recent results, records and more</p>
                                        <p>
                                            <a href="#" class="text-decoration-none text-primary">Departments list</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 pb-4 mb-3" style="border-bottom: 1px solid #cecece!important;">
                                <div class="card-header" id="headingSeven">
                                    <h6 class="mb-0 font-weight-bold w-75">
                                        <a class="text-decoration-none text-dark" data-toggle="collapse" href="#collapseSeven"
                                           aria-expanded="false" aria-controls="collapseSeven">
                                            What are the symbols that appear next to the estimates on Lots?
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-4 letter__spacing">Different from auction, where items are bid on and sold to
                                            the highest bidder in a public sale, and Private Sales, which offers discreet brokerage
                                            of a high-value transaction between seller and buyer, the Buy Now platform offers a
                                            channel for immediate sale of an item at a fixed price.</p>
                                        <p class="mb-2 letter__spacing">Find information on
                                            <a href="#" class="text-decoration-none text-primary">Shipping and Return Policies</a>
                                        </p>
                                        <p class="mb-2 letter__spacing">Find information on
                                            <a href="#" class="text-decoration-none text-primary">Buyer Terms</a>
                                        </p>
                                        <p class="mb-2 letter__spacing">Find information on
                                            <a href="#" class="text-decoration-none text-primary">Seller Terms</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="w-100">
                            <img class="w-100" src="https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion-->
        </div>
{{--        ======= END ABOUT MAIN ==============--}}
    </section>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
{{--    ====== SCRIPT ACCORDION =====--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $(".accordion .card .card-header").click(function () {
                if ($(this).find("i.fa-solid").hasClass("fa-minus")) {
                    $(this).find("i.fa-solid").removeClass("fa-minus");
                    $(this).find("i.fa-solid").addClass("fa-plus");
                } else if ($(this).find("i.fa-solid").hasClass("fa-plus")) {
                    $(this).find("i.fa-solid").removeClass("fa-plus");
                    $(this).find("i.fa-solid").addClass("fa-minus");
                }
                $(this).parents(".card").siblings().find(".card-header i.fa-solid").removeClass("fa-minus");
                $(this).parents(".card").siblings().find(".card-header i.fa-solid").addClass("fa-plus");
            });
        });
    </script>
{{--    === END SCRIPT ACCOURDION ====--}}
@endsection
@section('script-tag')
@endsection
