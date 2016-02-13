<?php

class settings {
    public static function settings_item_switch($text, $defaultValue = false) {
        $checkedText = $defaultValue ? " checked='true'" : "";

        echo "<div style='margin-bottom: 10px;'>
                <h6 style='float: left'>$text</h6>
                <div class='switch' style='float: right'>
                    <label>
                        <input type='checkbox'$checkedText>
                        <span class='lever'></span>
                    </label>
                </div>
                <div style='clear: both'></div>
            </div>";
    }
}