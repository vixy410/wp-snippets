<?php
add_action('init','of_options');
if (!function_exists('of_options')) {
function of_options(){

// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "of";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');
$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    

//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 
$align_option = array("left" => "Left", "center" => "Center", "right" => "Right"); 
$contact_option = array("no" => "Show no cotact in sidebar", "one" => "Show one contact in sidebar", "two" => "Show two contacts in sidebar"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();
if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();

/********** 
Begin Adding options here ( IMPORTANT: Add your 1st heading before you add any options )***/
//File Uploader

//General Options Heading
$options[] = array( "name" => "General Options",
					"type" => "heading"); 

$options[] = array( "name" => "Upload your logo",
					"desc" => "Upload a file (img, pdf, etc...), or specify the address of your online file. (http://yoursite.com/logo.png)",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");
					
$url =  OF_DIRECTORY . '/admin/images/';

//Favicon
$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
					$url =  OF_DIRECTORY . '/admin/images/'; 
							 
//Google Analytics
$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");

//Content Options Heading
$options[] = array( "name" => "Content Options",
					"type" => "heading"); 

//Select Category
$options[] = array( "name" => "Select a Category for display in your Greetings area of Home page",
					"desc" => "Hit the dropdown and select a category from the listings",
					"id" => $shortname."_greetings",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $of_categories); 

//Select Category
$options[] = array( "name" => "Select a Category for the Featured work area on home page",
					"desc" => "Hit the dropdown and select a category from the listings",
					"id" => $shortname."_featuredwork",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $of_categories); 
					
//Contact Options Heading
$options[] = array( "name" => "Contact Options",
					"type" => "heading"); 

//Text Field
$options[] = array( "name" => "Enter your email address",
					"desc" => "Enter text into the field",
					"id" => $shortname."_email",
					"std" => "default@yourcompany.com",
					"type" => "text");   

//Phone Field
$options[] = array( "name" => "Enter your phone number",
					"desc" => "Enter text into the field",
					"id" => $shortname."_phone",
					"std" => "1-800-123-4567",
					"type" => "text");   

//Address Field
$options[] = array( "name" => "Enter your address",
					"desc" => "Enter text into the field",
					"id" => $shortname."_address",
					"std" => "123 Main st.",
					"type" => "text");   


//City Field
$options[] = array( "name" => "Enter your city",
					"desc" => "Enter text into the field",
					"id" => $shortname."_city",
					"std" => "Atlanta",
					"type" => "text");   

//State Field
$options[] = array( "name" => "Enter your state",
					"desc" => "Enter text into the field",
					"id" => $shortname."_state",
					"std" => "GA",
					"type" => "text");   

//Zip Field
$options[] = array( "name" => "Enter your zip",
					"desc" => "Enter text into the field",
					"id" => $shortname."_zip",
					"std" => "60883",
					"type" => "text");   


//Footer Heading
$options[] = array( "name" => "Footer Options",
					"type" => "heading"); 

//Text Area
$options[] = array( "name" => "Enter your footer copyright information",
					"desc" => "Enter text into the field",
					"id" => $shortname."_copyright",
					"std" => "Standard value goes here",
					"type" => "textarea");   

/*** Stop adding options ***/

update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);
}
}
?>