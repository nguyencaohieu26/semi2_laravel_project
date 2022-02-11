@extends('layouts.LayoutPublic')
@section('page-title','Contact')
@section('content')
    <!-- Contact Header -->
    <header id="contact__header" class="mb-5">
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <a href="{{asset('aboutus')}}" class="text-muted text-capitalize">about us</a>
                    <h1 class="text-capitalize mb-0 font-weight-bold">contact us</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- End Contact Header-->
    <!--contact content-->
    <Section class="contact__main">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="contact__main--title ml-5">
                        <h3 class="text-capitalize ml-5 pb-2 pl-5 font-weight-bold">helpful links</h3>
                        <p class="contact__main--underlined"></p>
                    </div>
                    <!--helpful__links-->
                    <div class="contact__items my-3">
                        <div class="row">
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/24cf9aa/2147483647/strip/true/crop/3840x2357+0+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F67%2Fa3%2F2bfb9241488690b8d097ef713a96%2F4-211014-sothebys-haydonperrior.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">upcoming auctions</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/f89ca6d/2147483647/strip/true/crop/586x360+54+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F02%2F55%2Fd188f99a4ae3b20ac79daca992f7%2Frecirc-051817-sothebys-contemporary-evening-sale-897-1.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">auction results</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/191074a/2147483647/strip/true/crop/1831x1124+0+76/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F61%2F4a%2F86d8b7c741a883dc71488cebeb8d%2Fabout-us-image.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">buy now</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/5678ce4/2147483647/strip/true/crop/1420x872+0+84/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2Ff3%2Fb2%2F960d317e43a78f46b41a198ab1c9%2F21693106-sell-with-sothebys-webbanners-1420x1040-banner2.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">sell with sotheby's</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/2e08073/2147483647/strip/true/crop/554x340+0+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F25%2Fe3%2F74f9b7254c1789678cd432a216f0%2F1514931659634.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">auction basics</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/fbf6cc1/2147483647/strip/true/crop/1278x784+0+75/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F03%2Ffe%2F8b72850548078e30cd92e1baff22%2Fsothebys-wine.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">departments</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/47e94dc/2147483647/strip/true/crop/733x450+27+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F1c%2Fb2%2F26e8e2644463b9ab904c445a8f3e%2F802-edit.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">locations</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/f57e064/2147483647/strip/true/crop/699x429+151+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F9f%2F92%2Fd7825ed649498529ce24b511daf5%2Fsea-team.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">our team</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 contact--padd">
                                <a href="#" class="position-relative d-block">
                                    <img class="contact__items--img w-100 mb-3" src="https://sothebys-com.brightspotcdn.com/dims4/default/fb17524/2147483647/strip/true/crop/595x365+14+0/resize/448x275!/format/webp/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2F47%2F24%2F2b5de52c4c2c81b237a4634242a1%2F1424674635257.jpg">
                                    <div class="contact__items--text position-absolute">
                                        <p class="mb-0 text-uppercase text-white p-2">services</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pl-4">
                    <div class="row">
                        <div class="col-md-6 col-5">
                            <div class="contact__info--phone letter__spacing ml-5">
                                <b>From the UK:</b><br/>
                                <p class="contact--text mb-0">+44 (0) 20 7293 5000</p><br/>
                                <b>From the US:</b><br/>
                                <p class="contact--text mb-0">+1 212 606 7000</p><br/>
                                <b>Enquiries by Location:</b>
                                <p class="contact--text mb-0">You may send us an email or call the Sotheby's office nearest
                                    to you. For a list of emails by location,</p>
                                <b><a href="#" class="contact--text text-muted">Click here</a></b>
                            </div>
                        </div>
                        <div class="col-md-6 col-7">
                            <div class="contact__info--email letter__spacing">
                                <b class="text-capitalize">general enquiries: </b><br/>
                                <p class="contact--text mb-0"><a>Aptech@fpt.edu.vn</a></p><br/>
                                <b class="text-capitalize">Buy Now Enquiries: </b>
                                <p class="contact--text mb-0"><a>Aptech@fpt.edu.vn</a></p>
                                <p class="contact--text mb-0 pb-4">+1 212 606 7430</p>
                                <div>
                                    <b class="text-capitalize">Buy Now Enquiries: </b>
                                    <p class="contact--text mb-0">
                                        <a href="#">NewYork@fpt.edu.vn</a>
                                    </p>
                                    <p class="contact--text mb-0">+1 212 606 7414</p>
                                    <p class="contact--text mb-0"><a href="#">London@fpt.edu.vn</a></p>
                                    <p class="contact--text mb-0">+44 (0)20 7293 5283</p>
                                    <p class="contact--text mb-0">
                                        <a href="#">HongKong@fpt.edu.vn</a>
                                    </p>
                                    <p class="contact--text mb-0">+852 2822 8142</p>
                                    <p class="contact--text mb-0"><a href="#">Paris@fpt.edu.vn</a></p>
                                    <p class="contact--text mb-0">+ 33 (0)1 53 05 53 48</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__map bg-info pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 maps mt-5" >
                        <iframe class="w-100 h-100 mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 col-12">
                        <h2 class="text-uppercase mt-3 font-weight-bold text-white">contact form</h2>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Note" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-light float-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!--End contact content-->
@endsection
@section('script-tag')
@endsection
