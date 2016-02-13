<?php

class apps {
    public static function demo_item($title, $developer, $isVipDeveloper, $price, $faIcon, $iconColor = '#000') {
        $vipText = $isVipDeveloper ? "<i class='fa fa-star' style='color: #90CAF9; margin-right: 5px;'></i>" : "";
        $actionText = strtoupper(trim($price)) == "FREE" ? "Install" : "Buy";

        echo "<div class='card-panel white' style='margin-bottom: 20px;'>
            <h1 align='center' style='font-size: 700%; margin-top: 0px; color: $iconColor'><i class='fa fa-$faIcon'></i></h1>
            <hr/>
            <h5>$title</h5>
            <p style='font-size: 85%; color: #aaa'><b>$vipText$developer</b></p>
            <p style='font-size: 85%; color: #aaa; margin-top: -15px;'><b>Price: </b>$price</p>
            <hr/>
            <div align='right'>
                <a class='waves-effect waves-light btn'>$actionText</a>
            </div>
        </div>";
    }
}