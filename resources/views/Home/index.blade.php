<?php
use Illuminate\Routing\Route;
?>
@extends('layouts.main')

@section('title')Бас болим@endsection

@section('content')

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/06.jpg);"></div>
                    <div class="pogoSlider-slide" style="background-image:url(images/07.jpg);"></div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!-- section -->
    <div class="section tabbar_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu">
                        <ul>
                            <li><a href="#"><span class="icon"><img src="images/i1.png" alt="#" /></span><span>Ka'sip-o'ner mektebi</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i2.png" alt="#" /></span><span>Ustaxana</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i3.png" alt="#" /></span><span>Do'gerek</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i4.png" alt="#" /></span><span>Social</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i5.png" alt="#" /></span><span>Telegramm</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i6.png" alt="#" /></span><span>Email</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i7.png" alt="#" /></span><span>Telefon</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Ka'sip-o'ner mektebimizde</span> bilim aliw ushin mu'rajat etin' !!!</h2>
                        </div>
                        <div class="full">
                            <p>Mektebimiz O'zbekistan Respublikasi Prezidentinin' 2019-jil 6-sentyabrdegi PF-5812-sanli "Professional bilimlendiriw sistemasin ja'nede jetilistiriwge qaratilg'an qosimsha is-ilajlar haqqinda" g'i Pa'rmanina tiykar kolledj
                                Baslang'ish professional bilimlendiriw basqishinda kadrlar tayarlaytug'in oqiw ornina yag'niy <b>No'kis qalasi 1-sanli ka'sip-o'ner mektebi</b> bolip qayta sho'lkemlestirildi.</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">Mektep haqqinda</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <img src="images/til-bayrami01.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Mektepbimizdegi </span>qaniygelikler</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/avto01.jpg" alt="#" />
                        <h4>Avtomobil dvigatellerin boleklerge ajiratiw ha'm jiynaw slesari</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/avto04.jpg" alt="#" />
                        <h4>Avtomobillerdi on'law slesari</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/kompyuter.jpg" alt="#" />
                        <h4>Kompyutergrafikasi ha'm dizayn operatori</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/kepserlew02.jpg" alt="#" />
                        <h4>Kepserlewshi</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/tiginshi01.jpg" alt="#" />
                        <h4>Tiginshi</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/suw01.jpg" alt="#" />
                        <h4>Aqaba suw ha'm suw taminati</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Janaliqlar</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    @foreach($posts as $post)
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="{{ Storage::url($post->image) }}" alt="{{$post->meta_description}}" />
                                                <h4>{{$post->title}}</h4>
                                                <p>{{$post->body}}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Contact</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="full float-right_img">
                        <img src="images/img10.png" alt="#">
                    </div>
                </div>
                <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_form">
                        <form action="contact.html">
                            <fieldset>
                                <div class="full field">
                                    <input type="text" placeholder="Your Name" name="your name" />
                                </div>
                                <div class="full field">
                                    <input type="email" placeholder="Email Address" name="Email" />
                                </div>
                                <div class="full field">
                                    <input type="phn" placeholder="Phone Number" name="Phone number" />
                                </div>
                                <div class="full field">
                                    <textarea placeholder="Massage"></textarea>
                                </div>
                                <div class="full field">
                                    <div class="center"><button>Send</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
