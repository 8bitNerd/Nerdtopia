<?php

class sidebar {
    public static function generateSidebar($selectedIndex = -1) {
        $selectedItem0 = $selectedIndex == 0 ? " selected" : "";
        $selectedItem1 = $selectedIndex == 1 ? " selected" : "";
        $selectedItem2 = $selectedIndex == 2 ? " selected" : "";
        $selectedItem3 = $selectedIndex == 3 ? " selected" : "";
        $selectedItem4 = $selectedIndex == 4 ? " selected" : "";
        $selectedItem5 = $selectedIndex == 5 ? " selected" : "";

        echo "<aside class='sidebar-left'>
            <a class='company-logo' href='#'>
                <img src='../img/base_icon.png' height='40px' />
            </a>
            <div class='sidebar-links'>
                <a class='link-blue$selectedItem0' href='../home/'><i class='fa fa-home'></i>Home</a>
                <a class='link-red$selectedItem1' href='../feed/'><i class='fa fa-newspaper-o'></i>News Feed</a>
                <a class='link-yellow$selectedItem2' href='../messages/'><i class='fa fa-comment'></i>Messages</a>
                <a class='link-green$selectedItem3' href='../apps/'><i class='fa fa-rocket'></i>Apps</a>
                <a class='link-purple$selectedItem4' href='../profile/'><i class='fa fa-user'></i>Profile</a>
                <a class='link-orange$selectedItem5' href='../settings/'><i class='fa fa-cog'></i>Settings</a>
            </div>
        </aside>";
    }
}