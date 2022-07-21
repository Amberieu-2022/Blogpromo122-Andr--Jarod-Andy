<?php

/**
 * @package Social_Network
 * @version 1.0.0
*/
 /* 
    Plugin Name: Social-Network
    Plugin URI: http://wordpress.org/plugins/social-network-test/
    Description: Social Network Plugin
    Author: Moi
    Version: 1.0.0
    Author URI:http://localhost/blogPromo
*/
    add_action('admin_menu', 'Social_Network');
    
    function Social_Network(){
        add_menu_page( 'Social-Network ', 'Social Network', 'manage_options', 'Social Network', 'form_url' );
    }
    
    
    $db = new PDO('mysql:host=localhost;dbname=blog_promo;charset=utf8','root');
    
    
    if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $fb = $_POST['fb'];
        $insta = $_POST['insta'];
        $git = $_POST['git']; 
        var_dump($fb);
        $req = $db->prepare("INSERT INTO `wp_plugin` (`wp_fb`, `wp_insta`, `wp_git`) VALUES (:fb, :insta, :git)");
        $req->bindParam(':fb', $fb,PDO::PARAM_STR);
        $req->bindParam(':insta', $insta,PDO::PARAM_STR);
        $req->bindParam(':git', $git,PDO::PARAM_STR);   
        $req->execute();
    }
    
    function shortcode_resaux(){
        $db = new PDO('mysql:host=localhost;dbname=blog_promo;charset=utf8','root');
        $req1 = $db->query("SELECT `wp_fb`, `wp_insta`, `wp_git` FROM `wp_plugin` ORDER BY wp_id DESC");
        $fbb = $req1->fetch(PDO::FETCH_ASSOC);
        
        if($fbb['wp_fb']){
           $fb = "<a href=".$fbb['wp_fb']."> Facebook </a> <br> ";
        }
        if($fbb['wp_insta']){
            $insta = "<a href=".$fbb['wp_insta']."> Instagram </a> <br>";
        }
        if($fbb['wp_git']){
            $git = "<a href=".$fbb['wp_git']."> GitHub </a>";
        }
        return $fb . $insta . $git;
    }
    add_shortcode('resaux', 'shortcode_resaux');
    
    function form_url(){
?>
    <h1>Entrer vos url</h1>
    <form method="POST">
        <label>Facebook</label>
        <input id="fb" type="text" name="fb">
        <label>Instagram</label>
        <input id="Instagram" type="text" name="insta">
        <label>Git Hub</label>
        <input id="git" type="text" name="git">
        <input type="submit" id="submit" name="submit">
    </form>
    <p>Shortcode pour les resaux : [resaux]</p>  
<?php } ?>