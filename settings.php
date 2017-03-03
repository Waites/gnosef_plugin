<?php 
// Variables

class gnobox {
	public $title;
	public $text;
	public $img;
	public $link;
    public $linkid;

}

$box1 = new gnobox();
$box2 = new gnobox();
$box3 = new gnobox();


$box1->title = get_option('b1tit');
$box1->text = get_option('b1txt');
$box1->link = get_option('b1link');
$box1->img = get_option('b1img');
$box2->title = get_option('b2tit');
$box2->text = get_option('b2txt');
$box2->link = get_option('b2link');
$box2->img = get_option('b2img');
$box3->title = get_option('b3tit');
$box3->text = get_option('b3txt');
$box3->link = get_option('b3link');
$box3->img = get_option('b3img');


function gnosef_settings_create() {

$page_title="GNObox Settings";
$parent_slug="themes.php";
$menu_title="GNObox Settings";
$capability="edit_pages";
$menu_slug="gnosef-settings";
$function="gnosef_settings_page";
// $position="3";
//     add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action('admin_menu', 'gnosef_settings_create');

function gnosef_settings_page(){
	global $box1,$box2,$box3;

	if (isset($_POST['b1tit'])) {
        update_option('b1tit', $_POST['b1tit']);
        $box1->title = $_POST['b1tit'];
    } 
    if (isset($_POST['b1txt'])) {
        update_option('b1txt', $_POST['b1txt']);
        $box1->text = $_POST['b1txt'];
    } 
        if (isset($_POST['b1link'])) {
        update_option('b1link', $_POST['b1link']);
        $box1->link = $_POST['b1link'];
    } 
        if (isset($_POST['b1img'])) {
        update_option('b1img', $_POST['b1img']);
        $box1->img = $_POST['b1img'];
    } 
    if (isset($_POST['b2tit'])) {
        update_option('b2tit', $_POST['b2tit']);
        $box2->title = $_POST['b2tit'];
    } 
    if (isset($_POST['b2txt'])) {
        update_option('b2txt', $_POST['b2txt']);
        $box2->text = $_POST['b2txt'];
    } 
    if (isset($_POST['b2link'])) {
        update_option('b2link', $_POST['b2link']);
        $box2->link = $_POST['b2link'];
    }
        if (isset($_POST['b2img'])) {
        update_option('b2img', $_POST['b2img']);
        $box2->img = $_POST['b2img'];
    } 
    if (isset($_POST['b3tit'])) {
        update_option('b3tit', $_POST['b3tit']);
        $box3->title = $_POST['b3tit'];
    } 
    if (isset($_POST['b3txt'])) {
        update_option('b3txt', $_POST['b3txt']);
        $box3->text = $_POST['b3txt'];
    } 
    if (isset($_POST['b3link'])) {
        update_option('b3link', $_POST['b3link']);
        $box3->link = $_POST['b3link'];
    } 
    if (isset($_POST['b3img'])) {
        update_option('b3img', $_POST['b3img']);
        $box3->img = $_POST['b3img'];
    } 

	include 'option_form.php';
}


 ?>