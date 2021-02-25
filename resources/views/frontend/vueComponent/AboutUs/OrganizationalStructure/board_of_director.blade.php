@include('frontend/layouts/header')
    <body class="d-flex flex-column pl-0 pr-0">
        <div id="w-wrapper" class="pl-0 pr-0 pb-3">
            @include('frontend/layouts/navbar')
            <section id="pageStarter">
                <div class="carouselHeader">
                    <img class="img-fluid landing_image_other" src="{{ asset('assets/frontend/img/landing_page/organization_structured_main_page.jpg') }}">
                    <div class="overlay">
                        <h5 class="header_txt">
                            <?php 
                                if(isset($_COOKIE["language"])){
                                    if($_COOKIE["language"] == 'eng'){
                                        echo "About IIBL";
                                    }else{
                                        echo "আইআইবিএল সম্পর্কে পরিচিত";
                                    }
                                }else{
                                    echo "About IIBL";
                                }
                            ?>
                        </h5>
                    </div>
                </div>
            </section>
            <section id="contentSection">
                <div class="container">
                    <div class="row">
                        @include('frontend/vueComponent/AboutUS/OrganizationalStructure/menu')
                        <div class="col-md-9 p-3 pr-0">
                            <div class="container pb-2 pr-0" id="rightContentLoad">
                               <style type="text/css">
                                   .content_load .directors div.col-md-3{
                                       padding-left: 3px;
                                       padding-right: 3px;
                                       height: 263px;
                                       position: relative;
                                   }
                                   .content_load .bod_title > p{
                                       font-size: 11px !important;
                                       margin-bottom: 3px !important;
                                   }
                                   .content_load .bod_title > a{
                                       font-size: 11px !important;
                                   }
                               </style>

                               <h5 class="content_header_txt">Board of Directors</h5>
                               <p class="content_para_txt">
                                   The Board of Directors of the Company comprises well-known industrialists and reputed personalities drawn from different walks of professions and vocations. The members are dedicated to the cause of Islam and are committed to build up an Islamic Insurance Institution worthy of its name.
                               </p>
                               <div class="content_load">
                                   <div class="row directors">
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/sayed.png" class="card-img-top img-fluid" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Al-haj Mohammad Sayeed</p>
                                               <a href="" class="p_12 "> CHAIRMAN </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/Ismail_nawab.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Al-haj Md. Ismail Nawab</p>
                                               <a href="" class="p_12 ">VICE CHAIRMAN </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/tajul_islam.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">M. Tajul Islam</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/nurMohammadMamun.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Nur Mohammad Mamun</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/anjumon.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Anjumon Ara Begum</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/tofazzal.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Tofazzal Hossain</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/belayet.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Gazi Belayet Hossain</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/abdul_halim.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Al-haj Md. Abdul Halim</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/ashma.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Ashma Nur</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/shayla.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Shayla Parbin</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/abdul_hannan.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Al-haj Mohammad
                                                   Abdul Hannan</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/murtaza.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Mohammad Murtaza Kamal</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/jamila.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Nostaren Jamila</p>
                                               <a href="" class="p_12 "> DIRECTOR </a>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                           <div class="bod_img">
                                               <img src="<?php echo asset('assets/frontend/');?>/img/bod/abdul_matin.png" class="card-img-top" alt="...">
                                           </div>
                                           <div class="bod_title">
                                               <p class="p_12 m-0">Md. Abdul Matin</p>
                                               <a href="" class="p_12 "> MANAGING DIRECTOR & CEO</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('frontend/layouts/footer')

        <!-- vendor core script -->
        @include('frontend/layouts/script')

        <script type="text/javascript">
        </script>
    </body>
</html>