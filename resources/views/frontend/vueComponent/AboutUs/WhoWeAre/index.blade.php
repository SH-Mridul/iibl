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
                        @include('frontend/vueComponent/AboutUs/menu')
                        <div class="col-md-9 p-3 pr-0">
                            <div class="container pb-2 pr-0" id="rightContentLoad">
                                <?php
                                    if(isset($_COOKIE["language"])){
                                        if($_COOKIE["language"] == 'eng'){
                                            print_r($result[0]->english);
                                        }else{
                                            print_r($result[0]->bangla);
                                        }
                                    }else{
                                        print_r($result[0]->english);
                                    }
                                ?>
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
