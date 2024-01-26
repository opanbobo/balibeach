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
            'content' => 'Discover serenity in our Deluxe Ocean View Room, a spacious 37 sqm haven offering breathtaking sea views. Relax in luxury on a plush king-sized bed, step out onto your private balcony to bask in the beauty of the ocean, and immerse yourself in the perfect coastal escape.',
        ],
        [
            'title' => 'Executive Room',
            'content' => 'Unwind in our Corner Suite Garden View at the resort, boasting a spacious 98 square meters, a private balcony or terrace, and a dedicated dining table. This elegantly appointed sanctuary invites you to savor tranquility amid lush surroundings. Immerse yourself in modern comfort and luxury for an extraordinary retreat.',
        ],
        [
            'title' => 'DELUXE SUITE',
            'content' => 'Elevate your stay in our Deluxe Ocean View Suite, a lavish 81 sqm haven. Enjoy stunning vistas of the ocean from your suite, featuring a king-sized bed, work desk, and a separate sitting area. Immerse yourself in the perfect blend of luxury and breathtaking views for a truly exceptional experience.',
        ],
        [
            'title' => 'EXECUTIVE SUITES',
            'content' => 'Experience luxury redefined in our Executive Ocean View Suite, a sprawling 90 sqm retreat. Revel in the breathtaking coastal panoramas from your private haven, complete with a king-sized bed, work desk, and a cozy sitting area. This suite seamlessly combines expansive comfort with captivating ocean views, ensuring a stay that is both indulgent and unforgettable.',
        ],
        [
            'title' => 'SANUR SUITE',
            'content' => 'Indulge in our Sanur Ocean View Suite, a grand 118 sqm escape where coastal charm meets opulence. Unwind in the spacious suite featuring a king-sized bed, work desk, inviting sitting area, and a dedicated dining table. Immerse yourself in the perfect harmony of luxury and panoramic ocean views, creating an experience that transcends ordinary escapes.',
        ],
        [
            'title' => 'ROYAL SUITE',
            'content' => 'Welcome to our Royal Ocean View Suite, an expansive 135 sqm haven where grandeur meets coastal splendor. Recline in luxury on a king-sized bed, attend to tasks at the work desk, and relax in the inviting sitting area. Unwind further at the dedicated dining table, all while immersing yourself in breathtaking ocean views. Elevate your stay with a perfect blend of space, comfort, and scenic beauty in the Royal Suite.',
        ],
        [
            'title' => 'Bali beach SUITE',
            'content' => 'Step into unparalleled luxury with our Bali Beach Ocean View Suite, an expansive 173 sqm retreat where sophistication harmonizes with breathtaking coastal panoramas. Indulge in the spacious elegance of a king-sized bed, complemented by a dedicated work desk, inviting sitting area, and a thoughtfully arranged dining table. Immerse yourself in the perfect fusion of opulence and scenic beauty in the Meru Suite, ensuring a stay that transcends ordinary indulgence.',
        ],
        [
            'title' => 'The Presidential Suite',
            'content' => 'Introducing the epitome of luxury – our Presidential Ocean View Suite, a sprawling 380 sqm haven where opulence meets unrivaled coastal vistas. Experience regal comfort with a king-sized bed, a dedicated work desk, a spacious living room, and an elegant dining area. Revel in the grandeur of panoramic ocean views, creating an extraordinary retreat in our highest category suite.',
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
