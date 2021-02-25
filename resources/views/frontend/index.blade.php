@include('frontend/layouts/header')
    <body class="d-flex flex-column pl-0 pr-0">
        <div id="w-wrapper" class="pl-0 pr-0 pb-3">
            @include('frontend/layouts/navbar')
            <section id="pageStarterIndex">
                <div class="carouselHeader">
                    <img class="img-fluid landing_image" src="{{ asset('assets/frontend/img/landing_page/landing_image_old.png') }}">
                    <div class="info_txt container">
                        <div class="container">
                            <h5>WE ARE HERE FOR</h5>
                            <h1>
                                <span style=
                                "
                                    font-size: 21px;
                                    font-weight: bold;
                                    color: tomato;
                                ">R</span>elationship-driven team of professionals dedicated to providing excellence in insurance services to our clients since 1999
                            </h1>
                        </div>
                    </div>
                    <div class="info_box">
                        <div class="after_slider">
                            <img src="{{ asset('assets/frontend/img/Icon ionic-ios-stats.png') }}" alt="">
                            <p>Financial Indicators</p>
                            <a class="p_12 slidHide" href="#">READ MORE</a>   
                        </div>
                        <div class="after_slider">
                            <img src="{{ asset('assets/frontend/img/Icon awesome-newspaper.png') }}" alt="">
                            <p>News & Events</p>
                            <a class="p_12 slidHide" href="#">READ MORE</a>   
                        </div>
                        <div class="after_slider">
                            <img src="{{ asset('assets/frontend/img/Icon awesome-handshake.png') }}" alt="">
                            <p>Affairs & Business</p>
                            <a class="p_12 slidHide" href="#">READ MORE</a>   
                        </div>
                        <div class="after_slider">
                            <img src="{{ asset('assets/frontend/img/Icon awesome-business-time.png') }}" alt="">
                            <p>Shareholding Status</p>
                            <a class="p_12 slidHide" href="#">READ MORE</a>   
                        </div>
                        <div class="after_slider">
                            <img src="{{ asset('assets/frontend/img/Icon awesome-credit-card.png') }}" alt="">
                            <p>Credit Rating</p>
                            <a class="p_12 slidHide" href="#">READ MORE</a>   
                        </div>
                    </div>
                </div>
            </section>
            <section id="explore">
                <div class="container explore_area p-5">
                    <div class="row">
                        <div class="col-md-4 pt-2">
                            <h2 class="font-weight-bolder Merriweather" style="color: #2C3459;font-size: 1.5rem;">Explore Services</h2>
                        </div>
                        <div class="col-md-6">
                            <p class="p_14 Poppins" style="color:#9A9A9A;color: #888;text-align: justify;">
                                What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
                            </p>
                        </div>
                        <div class="col-md-2 pt-3">
                            <a type="button" href="" class="btn p_14 green_btn">View All Services</a>
                        </div>
                    </div> 
                </div> 
            </section>
            <section id="ex_slide">
                <div class="overlay_ex"></div>
                <div class="container p-5" style="padding: 5rem!important;padding-top: 1rem !important;padding-bottom: 0px !important;">
                    <div class="row" style="position: relative;">
                        <div class="owl-carousel explore_slider"> 
                            <div class="item_ex ">
                                <img src="{{ asset('assets/frontend/img/ex_slider/fire_takaful.jpg') }}" alt="">
                                <button class="btn  green_btn ex_btn" onclick=
                                "
                                    (function(){
                                        location.href = '';
                                        return false;
                                    })(); return false;
                                ">Fire takaful</button>
                            </div> 
                            <div class="item_ex ">
                                <img src="{{ asset('assets/frontend/img/ex_slider/marine_takaful.jpg') }}" alt="">
                                <button class="btn  green_btn ex_btn" onclick=
                                "
                                    (function(){
                                        location.href = '';
                                        return false;
                                    })(); return false;
                                ">Marine takaful</button>
                            </div> 
                            <div class="item_ex ">
                                <img src="{{ asset('assets/frontend/img/ex_slider/motor_takaful.png') }}" alt="">
                                <button class="btn green_btn ex_btn" onclick=
                                "
                                    (function(){
                                        location.href = '';
                                        return false;
                                    })(); return false;
                                ">Motor takaful</button>
                            </div> 
                            <div class="item_ex ">
                                <img src="{{ asset('assets/frontend/img/ex_slider/engineering_takaful.jpg') }}" alt="">
                                <button class="btn  green_btn ex_btn" onclick=
                                "
                                    (function(){
                                        location.href = '';
                                        return false;
                                    })(); return false;
                                ">Engineering takaful</button>
                            </div> 
                            <div class="item_ex ">
                                <img src="{{ asset('assets/frontend/img/ex_slider/miscellaneous_takaful.jpg') }}" alt="">
                                <button class="btn green_btn ex_btn" onclick=
                                "
                                    (function(){
                                        location.href = '';
                                        return false;
                                    })(); return false;
                                ">Miscellaneous takaful</button>
                            </div> 
                        </div>
                        <div class="slider_control">
                            <div class="owl-nav" style="cursor: pointer;" >
                                <div  class="PrevBtn">
                                    <img src="{{ asset('assets/frontend/img/prev.png') }}" alt="">
                                </div>
                                <div class="NextBtn">
                                    <img src="{{ asset('assets/frontend/img/next.png') }}" alt="">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="debitLocation">
                <div class="container p-5 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="img_map" class="img-fluid" src="{{ asset('assets/frontend/img/map.png') }}" alt="">
                        </div>
                        <div class="col-md-6 location_btn">
                            <h3 class="p-1 font-weight-bold header_txt_content pl-0"> Our Branches All Over the Country
                            </h3>
                            <p class="p_12" style="color:#9A9A9A;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore e et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="map_btn">
                                <button class="button_conteiner ml-0" onclick="javascript:dynamicMapDetails('Dhaka')" id="dhaka" class="btn map_locationBtn">Dhaka</button>
                                <button class="button_conteiner" onclick="javascript:dynamicMapDetails('Sylhet')" id="barishal" class="btn map_locationBtn">Sylhet</button>
                                <button class="button_conteiner" onclick="javascript:dynamicMapDetails('Khulna')" id="barishal" class="btn map_locationBtn">Khulna</button>
                            
                                <button class="button_conteiner" onclick="javascript:dynamicMapDetails('Chattogram')" id="barishal" class="btn map_locationBtn">Chattogram</button>
                                <button class="button_conteiner ml-0" onclick="javascript:dynamicMapDetails('Rajshahi')" id="rajshahi" class="btn map_locationBtn">Rajshahi</button>
                                <button class="button_conteiner" onclick="javascript:dynamicMapDetails('Rongpur')" id="rongpur" class="btn map_locationBtn">Rongpur</button>
                                <button class="button_conteiner" onclick="javascript:dynamicMapDetails('Mymensingh')" id="Mymensingh" class="btn map_locationBtn">Mymensingh</button>
                            </div>
                            <h3 class="p-1 font-weight-bold header_txt_content pt-3 font-13 pl-0"> Latest Branches In <span class="fgColor-tomato branch_tag_name font-17" style="letter-spacing: 0.7px;">DHAKA</span>
                            </h3>
                            <div align=center>
                                <img class="map_table_loader" src="{{ asset('assets/frontend/img/loader_icon.gif') }}">
                            </div>
                            <table class="map_table mt-3">
                                <thead>
                                    <tr>
                                        <th>Branch Office Address and Phone</th>
                                        <th>Manager/In-charge</th>
                                        <th>Office opening</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            “BA-Splanad” (4th Floor), (Opposite of Badamtali Jame Masjid),143, Sk. Mujib Road, Badamtali, Agrabad, Chattogram. Phone: 031-713653
                                        </td>
                                        <td class="text-no-wrap">
                                            Khurshid Alam
                                        </td>
                                        <td>
                                            27/06/2000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            188/1,  Arambagh (2nd Floor), 
                                            Dhaka-1000. Phone: 7192725
                                        </td>
                                        <td class="text-no-wrap">
                                            S. M. Kamal Mahmud
                                        </td>
                                        <td>
                                            31/03/2016
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            “Don Plaza” (8th Floor), 9, B.B. Avenue, Ramna, Dhaka-1000.
                                            Phone: 9550460
                                        </td>
                                        <td>
                                            Md. Islam Sekander (Depel)
                                        </td>
                                        <td>
                                            09/05/2005
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <style type="text/css">
                .content_load {
                    margin-top: 0.5rem;
                    margin-bottom: 1rem;
                }
                .content_load .directors div.col-md-3{
                    padding-left: 3px;
                    padding-right: 3px;
                    height: 250px;
                    position: relative;
                }
                .content_load .directors .bod_img > img{
                    height: 250px;
                }
                .content_load .directors .bod_title{
                    bottom: 0px;
                    width: 98%;
                }
                .content_load .bod_title > p{
                    font-size: 12px !important;
                    margin-bottom: 3px !important;
                }
                .content_load .bod_title > a{
                    font-size: 11px !important;
                }
            </style>
            <section id="BOD">
                <!-- <div class="overlay_ex"></div> -->
                <div class="container content_load pb-2">
                    <h3 class="p-3 font-weight-bold text-center header_txt_content">Board Of Directors</h3>
                    <div class="row directors justify-content-center pt-3 pb-4 pl-5 pr-5">
                        <div class="col-md-3">
                            <div class="bod_img">
                                <img src="{{ asset('assets/frontend/img/bod/sayed.png') }}" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="bod_title">
                                <p class="p_16 m-0">Al-haj Mohammad Sayeed</p>
                                <a href="" class="p_14 "> CHAIRMAN </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bod_img">
                                <img src="{{ asset('assets/frontend/img/bod/Ismail_nawab.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="bod_title">
                                <p class="p_16 m-0">Al-haj Md. Ismail Nawab</p>
                                <a href="" class="p_14 ">VICE CHAIRMAN </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bod_img">
                                <img src="{{ asset('assets/frontend/img/bod/tajul_islam.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="bod_title">
                                <p class="p_16 m-0">M. Tajul Islam</p>
                                <a href="" class="p_14 "> DIRECTOR </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bod_img">
                                <img src="{{ asset('assets/frontend/img/bod/nurMohammadMamun.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="bod_title">
                                <p class="p_16 m-0">Nur Mohammad Mamun</p>
                                <a href="" class="p_14 ">DIRECTOR </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a type="button" href="{{ url('aboutus/board-of-director') }}" class="btn map_locationBtn board_btn button_conteiner">View All Board</a>
                    </div>
                </div>
            </section>
        </div>
        @include('frontend/layouts/footer')

        <!-- vendor core script -->
        @include('frontend/layouts/script')

        <script type="text/javascript">
        $(window).scroll(function(){
             var scroll = $(window).scrollTop();
             console.log(scroll);
             if(scroll > 50){
                console.log('scroll 600');
                 $("#navbar_top").css("background","#06311B");
             }
             else{
                 $("#navbar_top").css("background","#00000066");
                 $("#navbar_top").css("background","rgba(0, 0, 0, 0.4)");
             }
         })

        function dynamicMapDetails(cityName){
            $('.map_table').hide();
            $('.map_table_loader').show();
            $('.branch_tag_name').html(cityName);
            setTimeout(function(){ 
                $('.map_table').show();
                $('.map_table_loader').hide();
            }, 550);
         }
         </script>
    </body>
</html>
