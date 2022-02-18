@extends('layouts.LayoutPublic')
@section('page-title',$blog->title)
@section('content')
    {{--    ========= header ========--}}
    <header class="blog__header">
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <h1 class="text-capitalize mb-0 d-inline">
                        <a href="{{route('blog-page')}}" class="font-weight-bold text-dark">Blog</a>
                    </h1>
                    <span class="font-weight-bold text-capitalize">
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
            <h2 class="font-weight-bold">{{$blog->title}}</h2>
            <div class="d-flex">
                <p>
                    <i class="fas fa-hashtag mr-1"></i>
                    <span>{{$blog->tag}}</span>
                </p>
                <p class="ml-5">
                    <i class="fas fa-user-tag mr-1"></i>
                    <span>{{$blog->author}}</span>
                </p>
                <p class="ml-auto font-italic" style="font-size: 13px">
                    <i class="fas fa-calendar mr-1"></i>
                    <span>{{date_format($blog->created_at,' jS F Y')}}</span>
                </p>
            </div>
            <div class="blog__main--image">
                <img class="w-100 mb-3" alt="Image - {{$blog->title}}" src="/images_store/blogs/{{$blog->image}}">
            </div>
            <div class="detail__content">
               <p class="blog-main-content">
                   {{$blog->content_post}}
               </p>
                <ul class="pl-3">
                    <li class="pb-2">In his igitur partibus duabus nihil erat, quod Zeno commutare gestiret.</li>
                    <li class="pb-2">Quae si potest singula consolando levare, universa quo modo sustinebit?</li>
                    <li class="pb-2">Quam ob rem tandem, inquit, non satisfacit?</li>
                    <li class="pb-2">Si quicquam extra virtutem habeatur in bonis.</li>
                    <li class="pb-2">Philosophi autem in suis lectulis plerumque moriuntur.</li>
                    <li class="">Eadem fortitudinis ratio reperietur.</li>
                </ul>
                <p class="py-3">
                    In a subsequent interview with the Australian Broadcasting Corporation, Kieran Hosty, the Australian museum’s manager of maritime archeology, said he thought his group’s contract with RIMAP had ended in November but he couldn’t comment for certain. He gave further details that he said had convinced them it was the Endeavour, including the size of the timbers, that it was European-built, and the scuttling holes in the keel.
                    “So it tick all those boxes,” Hosty told the ABC. “So, we are very open to conversations with Dr. Abbass if she disagrees with our findings, their findings.”
                </p>
                <table class="w-100 table table-bordered">
                    <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>First Product</td>
                        <td>Performing art including drama are (expression using the body: dance, acting, singing)</td>
                        <td class="text-right">1250</td>
                    </tr>
                    <tr>
                        <td>2nd Product</td>
                        <td>Auditory art (expression by making sounds): music, singing?</td>
                        <td class="text-right"> 3000</td>
                    </tr>
                    <tr>
                        <td>4th Product</td>
                        <td>Culinary art (expression by making flavors and tastes): cooking</td>
                        <td class="text-right">5000</td>
                    </tr>
                    <tr>
                        <td>3rd Product</td>
                        <td>The practical arts (expression by making things and structures: architecture, filming, fashion, photography, video games)</td>
                        <td class="text-right">4550</td>
                    </tr>
                    <tr>
                        <td>Last Product</td>
                        <td>Fine art is expression by making something beautiful or appealing to the emotions by visual means: drawing, painting, printmaking, sculpture</td>
                        <td class="text-right">1560</td>
                    </tr>
                    </tbody>
                </table>
                <p>TPosters promoting consumer brands, products and services were led by Otto Obermeier’s curious, amusing poster titled Bock-Bier / aus der aktienbrauerei zum / Lowenbrau in Munchen. It more than doubled its high estimate to realize</p>
                <p>
                    “What we see on the shipwreck site under study is consistent with what might be expected of the Endeavour, but there has been no indisputable data found to prove the site is that iconic vessel, and there are many unanswered questions that could overturn such an identification,” Abbass wrote. “When the study is done, RIMAP will post the legitimate report.”
                </p>
            </div>
            <div class="blog__comment my-5">
                <h3 class="blog__comment--heading text-capitalize font-weight-bold">comments</h3>
                <h3>Post a Comment</h3>
                    <form method="post" action="">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input aria-label="name" type="text" name="name" class="w-100 p-2" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <input aria-label="email" type="email" name="email" class="w-100 p-2" placeholder="E-mail">
                            </div>
                            <div class="form-group col-md-4">
                                <input aria-label="website" type="text" name="website" class="w-100 p-2" placeholder="Website">
                            </div>
                            <div class="col-md-12 py-2">
                                <input type="checkbox" name="save" class="" id="save">
                                <label class="d-inline" for="save">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea aria-label="comment" class="w-100 p-2" rows="4" cols="300" placeholder="Comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark text-uppercase px-4 py-2 font-weight-bold">post comment</button>
                    </form>
            </div>
        </div>
    </section>
@endsection
@section('script-tag')
@endsection
