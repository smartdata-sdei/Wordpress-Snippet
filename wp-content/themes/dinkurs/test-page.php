<?php
/**
 * The test page template file
 * Template Name: Home
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="resource-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-section text-center">
                        <h2>Our Amazing Resources</h2>
                    </div>
                    <div class="long-text text-center  mt-20">
                        <p>Strategic Consulting Map a strategy, build a solution or elevate your product experience with
                            focused engagements
                            available as standalone offerings or as a part of your project’s service stack.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slider responsive resource-slider navigater">
                        <div class="outer_box">
                            <div class="inner-cont">
                                <img src="images/oracwe.png">
                                <div class="content_box">
                                    <h3>Mikael Strand</h3>
                                    <p class="post">Project Developer, Elsewhere AB</p>
                                    <p>Mikael a Scrum Master and project developer, has been with Elsewhere since the
                                        beginning.
                                    </p>
                                    <a href="#" class="text-link">Visit LinkedIn Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="outer_box">
                            <div class="inner-cont">
                                <img src="images/mattias.png">
                                <div class="content_box">
                                    <h3>Mattias Jacobsson</h3>
                                    <p class="post">Director, Elsewhere AB</p>
                                    <p>Mattias, directing everything Elsewhere and otherwise business related, is also
                                        project
                                        lead and certified scrum master.
                                    </p>
                                    <a href="#" class="text-link">Visit LinkedIn Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="outer_box">
                            <div class="inner-cont">
                                <img src="images/fredrik.png">
                                <div class="content_box">
                                    <h3>Fredrik Jacobsson</h3>
                                    <p class="post">Customer Manager, Elsewhere AB</p>
                                    <p>Fredrik is a multitasking machine working customer relations to an epic level and
                                        support
                                        the crew in all the daily projects.
                                    </p>
                                    <a href="#" class="text-link">Visit LinkedIn Profile</a>
                                </div>
                            </div>
                        </div>


                        <div class="outer_box">
                            <div class="inner-cont">
                                <img src="images/oracwe.png">
                                <div class="content_box">
                                    <h3>Mikael Strand</h3>
                                    <p class="post">Project Developer, Elsewhere AB</p>
                                    <p>Mikael a Scrum Master and project developer, has been with Elsewhere since the
                                        beginning.
                                    </p>
                                    <a href="#" class="text-link">Visit LinkedIn Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script>
        $(document).on('ready', function () {
         $('.responsive').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });

        </script>
<?php
get_footer();
