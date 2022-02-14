@extends('layouts.LayoutPublic')
@section('page-title','Blog')
@section('content')
    {{--    ========= header ========--}}
    <header class="blog__header">
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <h1 class="text-capitalize mb-0 d-inline">
                        <a href="{{asset('blog')}}" class="font-weight-bold text-dark">blog</a>
                    </h1>
                    <span class="font-weight-bold">
                         <i class="fa-solid fa-angles-right blog__icon--fz"></i>
                        blog detail
                    </span>
                </div>
            </div>
        </div>
    </header>
    {{--========== End header =========--}}
    <section class="blog__main mt-4">
        <div class="container">
            <h1 class="font-weight-bold">Keeping yourself safe when buying NFTs in 2022</h1>
            <div class="blog__main--image">
                <img class="w-100 pb-5"
                     src="https://bidpro.webdevia.com/nft-marketplace/wp-content/uploads/sites/4/2021/09/nft-13-1066x500.jpg">
            </div>
            <div class="detail__content">
                <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the
                    stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of
                    the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in
                    the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the
                    dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>
                <p class="pt-2">Est, ut dicis, inquam. Sed quid minus probandum quam esse aliquem beatum nec satis
                    beatum? Quo modo
                    autem optimum, si bonum praeterea nullum est? Itaque rursus eadem ratione, qua sum paulo ante usus,
                    haerebitis. Non semper, inquam;</p>
                <p class="about__title detail__content--textBorder font-weight-bold text-muted my-5 p-4">
                    Squid brunch messenger bag semiotics hammock crucifix quinoa bespoke health goth af. Marfa vegan air
                    plant heirloom taxidermy meh woke shaman aesthetic. Swag tumeric plaid cornhole vaporware four loko
                    man bun skateboard.
                </p>
                <ul class="pl-3">
                    <li class="pb-2">In his igitur partibus duabus nihil erat, quod Zeno commutare gestiret.</li>
                    <li class="pb-2">Quae si potest singula consolando levare, universa quo modo sustinebit?</li>
                    <li class="pb-2">Quam ob rem tandem, inquit, non satisfacit?</li>
                    <li class="pb-2">Si quicquam extra virtutem habeatur in bonis.</li>
                    <li class="pb-2">Philosophi autem in suis lectulis plerumque moriuntur.</li>
                    <li class="">Eadem fortitudinis ratio reperietur.</li>
                </ul>
                <p class="py-3">Tum Triarius: Posthac quidem, inquit, audacius. Mihi quidem Antiochum, quem audis, satis
                    belle
                    videris attendere. Si longus, levis dictata sunt. Deinde disputat, quod cuiusque generis animantium
                    statui deceat extremum. Praetereo multos, in bis doctum hominem et suavem, Hieronymum, quem iam cur
                    Peripateticum appellem nescio. Ergo instituto veterum, quo etiam Stoici utuntur, hinc capiamus
                    exordium.</p>
                <table class="w-100 table table-bordered">
                    <thead>
                    <tr>
                        <td>title</td>
                        <td>Description</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>First Product</td>
                        <td>Eadem fortitudinis ratio reperietur.</td>
                        <td class="text-right">1250</td>
                    </tr>
                    <tr>
                        <td>2nd Product</td>
                        <td>Quam ob rem tandem, inquit, non satisfacit?</td>
                        <td class="text-right"> 3000</td>
                    </tr>
                    <tr>
                        <td>4th Product</td>
                        <td>Si quicquam extra virtutem habeatur in bonis.</td>
                        <td class="text-right">5000</td>
                    </tr>
                    <tr>
                        <td>3rd Product</td>
                        <td>Philosophi autem in suis lectulis plerumque moriuntur.</td>
                        <td class="text-right">4550</td>
                    </tr>
                    <tr>
                        <td>Last Product</td>
                        <td>Quae si potest singula consolando levare, universa</td>
                        <td class="text-right">1560</td>
                    </tr>
                    </tbody>
                </table>
                <p class="py-4">Tacos kitsch mumblecore letterpress vegan vexillologist tumblr microdosing mixtape
                    cardigan
                    lumbersexual. Gochujang skateboard vape yuccie, hashtag mumblecore live-edge gentrify leggings
                    occupy direct trade. Copper mug raclette snackwave unicorn brunch everyday carry flannel. Pabst
                    fingerstache skateboard gentrify flannel mustache.</p>
            </div>
            <div class="blog__comment my-5">
                <h3 class="blog__comment--heading text-capitalize font-weight-bold">comments</h3>
                {{--                chưa làm phần hiển thị comment--}}
                <h3>Post a Comment</h3>
                    <form method="post" action="">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" name="name" class="w-100 p-2" placeholder="Name" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" name="email" class="w-100 p-2" placeholder="E-mail" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" name="website" class="w-100 p-2" placeholder="Website" value="">
                            </div>
                            <div class="col-md-12 py-2">
                                <input type="checkbox" name="save" class="" id="save">
                                <label class="d-inline" for="save">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="w-100 p-2" rows="4" cols="300" placeholder="Comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark text-uppercase px-4 py-3 font-weight-bold">post comment</button>
                    </form>
            </div>
        </div>
    </section>
@endsection
@section('script-tag')
@endsection
