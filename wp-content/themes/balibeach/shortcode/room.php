<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_room( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
        'id' => 0,
	], $atts );

    $content = [
        [
            'title' => 'Deluxe ROOM',
            'content' => 'Indulge in the comfort of our Deluxe Room, featuring 37 square meters of living space. Enjoy breathtaking ocean views from this well-appointed accommodation.',
        ],
        [
            'title' => 'Executive Room',
            'content' => 'Embark on a luxurious getaway in our Executive Room, a spacious 55 square meters retreat crafted for indulgence. Enjoy stunning ocean views from the balcony of your room.',
        ],
        [
            'title' => 'DELUXE SUITE',
            'content' => 'Experience a 81 square meters with a private balcony and breathtaking ocean views. Elevate your stay in our Deluxe Ocean Suite, features a bedroom, work space for your utmost comfort.',
        ],
        [
            'title' => 'EXECUTIVE SUITES',
            'content' => 'Indulge in a spacious 90 square meters retreat that seamlessly combines expansive comfort with captivating Indian Ocean views. Ensuring a stay that is both indulgent and unforgettable.',
        ],
        [
            'title' => 'SANUR SUITE',
            'content' => 'Experience a lavish 118 square meters suite, featuring a bedroom, workspace, separate living area, and a dedicated dining table. Immerse yourself in the perfect harmony of luxury and panoramic ocean views, creating an extraordinary escape.',
        ],
        [
            'title' => 'ROYAL SUITE',
            'content' => 'Discover our Royal Suite—a lavish 135 square meters sanctuary. Immerse yourself in breathtaking ocean views, elevating your stay with the perfect blend of ample space, luxurious comfort, and scenic beauty.',
        ],
        [
            'title' => 'Bali beach SUITE',
            'content' => 'Experience our Bali Beach Suite—an expansive 173-square-meter retreat where sophistication harmonizes with breathtaking coastal panoramas. Ensuring a stay that transcends ordinary indulgence.',
        ],
        [
            'title' => 'The Presidential Suite',
            'content' => 'Introducing our Presidential Ocean View Suite – a vast 380 square meter sanctuary with unparalleled ocean views. This top-tier suite includes a dedicated work desk, a spacious living room, and an elegant dining area, ensuring an extraordinary retreat.',
        ],
    ];

    $images = [
        ['deluxe.jpg', 'corner.jpg', 'premier.jpg', 'meru.jpg'],
        ['executive.jpg', 'premier.jpg', 'meru.jpg','deluxe.jpg'],
        ['deluxe-suite.jpg', 'meru.jpg','deluxe.jpg', 'corner.jpg'],
        ['executive-suite.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        ['sanur.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        ['royal.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        ['bbc-suite.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        ['president-suite.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        // ['presidential.jpg','presidential.jpg','presidential.jpg','presidential.jpg']
    ];



    $output  = '<div class="rk-room rk-room-'. $atts['id'] .'">';
    $output .= '<div class="rk-room-images">';


    foreach($images[$atts['id']] as $image) {
        $output .= '<div class="rk-room-image">';
        $output .= '<a class="rk-room-image-link" href="'. get_stylesheet_directory_uri() .'/assets/img/'. $image .'"><img class="img-fluid" src="'. get_stylesheet_directory_uri() .'/assets/img/'. $image .'" /></a>';
        $output .= '</div>';
    }

    $output .= '</div>';

    $output .= '<div class="rk-room-content">';
    $output .= '<div class="rk-room-text">';
    $output .= '<h2 class="rk-room-title">'. $content[$atts['id']]['title'] .'</h2>';
    $output .= '<p>'. $content[$atts['id']]['content'] .'</p>';
    $output .= '</div>';
    $output .= '</div>';


    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_room', 'rk_room' );
