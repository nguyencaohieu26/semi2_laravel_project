<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = array(
            "0" => array(
                "name"  =>"Contemporary",
                "image" => "https://cdn20.pamono.com/p/s/9/9/995586_0uwu5g0r4f/chinese-contemporary-art-luo-yi-serie-red-no-1-2020.jpg",
            ),
            "1"=> array(
                "name"  =>"Abstract Painting",
                "image" =>"https://s31531.pcdn.co/wp-content/uploads/2017/05/what-is-abstract-art-kandinsky.jpg.optimal.jpg"
            ),
            "2"=>array(
                "name" =>"Pop Art",
                "image" =>"https://www.arena-multimedia.vn/wp-content/uploads/2020/311220201609438220.jpeg"
            ),
            "3"=>array(
                "name"  =>"Folk Art",
                "image" =>"https://leisure-travel.vn/wp-content/uploads/2018/10/Rats-wedding.jpg"
            ),
            "4"=>array(
                "name"=>"Illustration Art",
                "image"=>"https://design4users.com/wp-content/uploads/2019/10/autumn-illustration-digital-art-1024x768.jpg.pagespeed.ce.iSEn_t8_b9.jpg"
            ),
            "5"=>array(
                "name" =>"Graphic Art",
                "image"=>"https://us.123rf.com/450wm/balabolka/balabolka1501/balabolka150100036/35598009-art-hand-lettering-and-doodles-elements-vector-illustration.jpg?ver=6"
            ),
            "6"=>array(
                "name" =>"Watercolorist",
                "image"=>"https://s31531.pcdn.co/wp-content/uploads/2018/03/2_TonyCouch_OctoberRusset_WCA_Watercolor-Paintings-1024x635.jpg.optimal.jpg"
            ),
            "7"=>array(
                "name" =>"Latin American Art",
                "image"=>"https://s3.amazonaws.com/barnes-images-p-e1c3c83bd163b8df/assets/sharedBackgroundImages/_1200x630_crop_center-center_82_none/AIC_Moriuchi_Latin-American-Modern-Art_ART162742_200923_160552.jpg?mtime=1600877153"
            ),

        );
        $trending_products   = array(
            "0"=>array(
                "name" => "Puzzle Art",
                "image" => "images/trending_auctions/trending-lot-2.jpg",
                "start_price" => "300",
                "date_start"  =>"",
                "date_end"    => "2022/02/14"
            ),
            "1"=>array(
                "name" => "Graphic Art",
                "image" => "images/trending_auctions/trending-lot-1.jpg",
                "start_price" => "400",
                "date_start"  =>"",
                "date_end"    => "2022/02/14"
            ),
            "2"=>array(
                "name" => "Human Face Art",
                "image" => "images/trending_auctions/trending-lot-3.jpg",
                "start_price" => "500",
                "date_start"  =>"",
                "date_end"    => "2022/02/14"
            ),
            "3"=>array(
                "name" => "Human Face Art",
                "image" => "images/trending_auctions/trending-lot-4.jpg",
                "start_price" => "500",
                "date_start"  =>"",
                "date_end"    => "2022/02/14"
            ),
            "4"=>array(
                "name" => "Human Face Art",
                "image" => "images/trending_auctions/trending-lot-5.jpg",
                "start_price" => "500",
                "date_start"  =>"",
                "date_end"    => "2022/02/14"
            )
        );

        $upcoming_products  = array(
            "0" => array(
                "name" => "On Top of the World",
                "image"=>"https://i.pinimg.com/736x/a0/99/f6/a099f6e683520478a02bf39c87452cdd.jpg",
                "start_price"=>"550",
                "date_start"=>"2022/02/12"
            ),
            "1" => array(
                "name" => "Country Folk Art",
                "image"=>"https://cdn.wallpapersafari.com/94/79/w32QH9.jpeg",
                 "start_price"=>"600",
                "date_start"=>"2022/02/14"
            ),
            "2" => array(
                "name" => "Canadian Folk Art",
                "image"=>"https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/canadian-art-and-canadian-artists-carole-spandau.jpg",
                "start_price"=>"700",
                "date_start"=>"2022/02/11"
            ),
            "3" => array(
                "name" => "American Country Art",
                "image"=>"https://i.pinimg.com/550x/18/a3/58/18a35827cf138c2e72de582802fe0c7d.jpg",
                "start_price"=>"1000",
                "date_start"=>"2022/02/13"
            ),
            "4" => array(
                "name" => "Country Harvest Art",
                "image"=>"https://www.artranked.com/images/65/65a92ce81f3fe74f8d280f2aade94acf.jpg",
                "start_price"=>"850",
                "date_start"=>"2022/02/15"
            ),
            "5" => array(
                "name" => "Fine American Art",
                "image"=>"https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/1/the-apple-gatherers-frederick-morgan.jpg",
                "start_price"=>"900",
                "date_start"=>"2022/02/16"
            ),
            "6" => array(
                "name" => "Fishing Village in Pembrokeshire",
                "image"=>"https://images.unsplash.com/photo-1580136579585-48a5311ee2f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1104&q=80",
                "start_price"=>"1100",
                "date_start"=>"2022/02/17"
            ),
            "7" => array(
                "name" => "Metropolitan city of bologna",
                "image"=>"https://images.unsplash.com/photo-1599677081334-abd8d806aeb9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
                "start_price"=>"1000",
                "date_start"=>"2022/02/15"
            ),
        );
        $blogs = array(
                "1" =>array(
                    "ImgUrl" => "images/banner12.PNG" ,
                    "blogTag" => "CONTEMPORARY ART",
                    "blogTitle" => "From the Archives: Chicago Originals",
                    "date" => "2022/01/02"
                ),
                "2" =>array(
                    "ImgUrl" => "images/banner10.jpg" ,
                    "blogTag" => "CONTEMPORARY ART",
                    "blogTitle" => "7 Tasks Artists Can (and Often Should) Outsource to Get Ahead",
                    "date" => "2022/01/05"
                ),
                "3" =>array(
                    "ImgUrl" => "images/banner2.jpg" ,
                    "blogTag" => "CONTEMPORARY ART",
                    "blogTitle" => "Artist’s Posters Protesting Beijing",
                    "date" => "2022/01/07"
                ),
                "4" =>array(
                    "ImgUrl" => "images/banner4.jpg" ,
                    "blogTag" => "CONTEMPORARY ART",
                    "blogTitle" => "Dawn of Spring: Chinese Paintings",
                    "date" => "2022/02/10"
                ),
        );

        return view('main_public.index',compact('categories','trending_products','upcoming_products','blogs'));
    }
}
