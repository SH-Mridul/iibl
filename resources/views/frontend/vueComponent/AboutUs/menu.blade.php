<div class="col-md-3 product_box_menu"> 
    <ul class="product_box_menu_ul">
        <li id="board_of_directors">
            <a href="{{ url('aboutus/who-we-are') }}">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "Who We are";
                        }else{
                            echo "আমাদের সম্পর্কে";
                        }
                    }else{
                        echo "Who We are";
                    }
                ?>
            </a>
        </li>
        <li id="board_of_directors">
            <a href="{{ url('aboutus/iibl-glance') }}">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "IIBL At A Glance";
                        }else{
                            echo "আইআইবিএল এক নজরে";
                        }
                    }else{
                        echo "IIBL At A Glance";
                    }
                ?>
            </a>
        </li>
        <li id="board_of_directors">
            <a href="{{ url('aboutus/key-corporate') }}">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "Key and Corporate Information";
                        }else{
                            echo "কী এবং কর্পোরেট তথ্য";
                        }
                    }else{
                        echo "Key and Corporate Information";
                    }
                ?>
            </a>
        </li>
        <li id="board_of_directors">
            <a href="">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "Message From Chairman";
                        }else{
                            echo "চেয়ারম্যানের বার্তা";
                        }
                    }else{
                        echo "Message From Chairman";
                    }
                ?>
            </a>
        </li>
        <li id="board_of_directors">
            <a href="">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "Message From CEO";
                        }else{
                            echo "সিইওর বার্তা";
                        }
                    }else{
                        echo "Message From CEO";
                    }
                ?>
            </a>
        </li>
        <li id="board_of_directors">
            <a href="">
                <?php 
                    if(isset($_COOKIE["language"])){
                        if($_COOKIE["language"] == 'eng'){
                            echo "Valued Clients";
                        }else{
                            echo "মূল্যবান ক্লায়েন্ট";
                        }
                    }else{
                        echo "Valued Clients";
                    }
                ?>
            </a>
        </li>
    </ul> 
</div>