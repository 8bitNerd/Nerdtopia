<?php

class feed {
    public static function demo_feed() {
        $col1 = ""; $col2 = ""; $col3 = ""; $col4 = "";
        for ($i = 0; $i <= 20; $i++) {
            $col1 .= self::demo_item();
            $col2 .= self::demo_item();
            $col3 .= self::demo_item();
            $col4 .= self::demo_item();
        }

        echo "<div>
                <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>$col1</div>
                <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>$col2</div>
                <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>$col3</div>
                <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>$col4</div>
            </div>";
    }

    private static function demo_item() {
        return "<div class='card-panel white' style='margin-bottom: 30px;'>
            <h5>Lorem ipsum dolor sit amet</h5>
            <p style='font-size: 85%; color: #aaa'>2015-02-13 14:29</p>
            <hr/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr/>
            <div align='right'>
                <a class='waves-effect waves-light btn'>Like</a>
                <a class='waves-effect waves-light btn' style='margin-left: 10px;'>Share</a>
            </div>
        </div>";
    }
}