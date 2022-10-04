<?php
/**
 * Block content for testing post_content migration.
 *
 * @package Genesis\Blocks\Migration\Tests
 */

return <<<HTML
Find German travel deals at ab-in-den-urlaub.de.
Yes, ab-so-lutely!
I like the ab-minor chord.
class="hello ab-block-container ab-fake-class">ab-minor ab-in-den-urlaub ab-so-lutely
class="ab-block-container"
<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":15,"containerPaddingRight":5,"containerPaddingBottom":15,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":850,"containerBackgroundColor":"#0b0b0b","containerImgID":3854,"className":"ab-layout-hero-1"} -->
<div style="background-color:#0b0b0b;padding-left:5%;padding-right:5%;padding-bottom:15%;padding-top:15%" class="wp-block-atomic-blocks-ab-container ab-layout-hero-1 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim" src="https://demo.studiopress.com/page-builder/ab-placeholder-hero.jpg" alt="hero header placeholder"/></div><div class="ab-container-content" style="max-width:850px"><!-- wp:heading {"align":"center","className":"ab-white-text"} -->
<h2 class="has-text-align-center ab-white-text">The future of website creation is here.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center has-text-color" style="color:#ffffff">With Genesis and Atomic blocks, you can build beautiful, powerful websites in minutes with our robust theme framework and professionally-designed sections and layouts</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Launch your new site!","buttonAlignment":"center"} -->
<div style="text-align:center" class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Launch your new site!</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-wideleft","align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-service-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-1 ab-layout-columns-3 ab-3-col-wideleft ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Build modern sites with Atomic Blocks layouts</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress, bringing it in line with modern coding standards, and aligning with open web initiatives. When we refer to “blocks” we are talking anything that can be inserted into the editor to create content. </p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Sites Built To Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>From the Atomic Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Beautiful Designs</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Rock Solid Standards</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-service-2"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-2 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Beautiful, responsive layouts ready to use.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":4,"layout":"ab-4-col-equal","marginBottom":3,"marginUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-4 ab-4-col-equal" style="margin-bottom:3%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>From the Atomic Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Rock Solid Standards</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Sites Built To Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Beautiful Designs</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Start building your site!","buttonAlignment":"center","buttonBackgroundColor":"#3373dc","buttonSize":"ab-button-size-large"} -->
<div style="text-align:center" class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-large" style="color:#ffffff;background-color:#3373dc">Start building your site!</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":5,"align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-service-3"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-3 ab-layout-columns-2 ab-2-col-equal ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-5 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":3852} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-square-placeholder.jpg" alt="AB Square Placeholder" class="wp-image-3852"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Build blazing websites with Genesis and Atomic Blocks. <br></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress, bringing it in line with modern coding standards, and aligning with open web initiatives. That sounds pretty great huh?</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Try Atomic Blocks Today","buttonBackgroundColor":"#3373dc"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Try Atomic Blocks Today</a></div>
<!-- /wp:atomic-blocks/ab-button -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":6,"align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-service-4"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-4 ab-layout-columns-2 ab-2-col-equal ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-6 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Build creative layouts in minutes with our professionally-designed sections and layouts.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":22}}} -->
<p style="font-size:22px">The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress, bringing it in line with modern coding standards, and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-spacer {"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:heading {"level":3} -->
<h3>Sites Built to Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>From the WPE Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Built-in Templates</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><br></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":11445} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-tall.jpg" alt="" class="wp-image-11445"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-team-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-team-1 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Meet our amazing team.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We're a talented group of creative individuals interested in art, cinematography, design, music, and all niches in between.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10230} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10230" src="https://demo.studiopress.com/page-builder/person-m-1.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Kyle Zion</h2><p class="ab-profile-title" style="color:#32373c">Screenprinter</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10211} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10211" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt="avatar placeholder"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Fran Acadia</h2><p class="ab-profile-title" style="color:#32373c">People Engineer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10225} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10225" src="https://demo.studiopress.com/page-builder/person-m-3.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Giannis Teton</h2><p class="ab-profile-title" style="color:#32373c">Office Manager</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10230} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10230" src="https://demo.studiopress.com/page-builder/person-w-5.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Mandi Arches</h2><p class="ab-profile-title" style="color:#32373c">Lead Designer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10211} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10211" src="https://demo.studiopress.com/page-builder/person-m-2.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Walter Bryce</h2><p class="ab-profile-title" style="color:#32373c">Lead Developer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10225} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10225" src="https://demo.studiopress.com/page-builder/person-w-1.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Kim Rainier</h2><p class="ab-profile-title" style="color:#32373c">Support Specialist</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-testimonial-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-testimonial-1 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">See what they're saying.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Our happy customers have a lot to say about our products and services!</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"padding":15} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s really great how easy your websites are to update and manage. I never have any problem at all!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-4.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Mary Sequoia</h2><small class="ab-testimonial-title" style="color:#32373c">Author</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-5.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Marcus Alpine</h2><small class="ab-testimonial-title" style="color:#32373c">Author</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10211,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-1.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Philip Glacier</h2><small class="ab-testimonial-title" style="color:#32373c">Publisher</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10211,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s really great how easy your websites are to update and manage. I never have any problem at all!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-1.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Robin Yellowstone</h2><small class="ab-testimonial-title" style="color:#32373c">Publisher</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s almost like having a designer right here with me. I just choose the page, make the change and click save. It’s so simple.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Amy Redwood</h2><small class="ab-testimonial-title" style="color:#32373c">Consultant</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I can't believe how good the customer support is on this product. I'm used to waiting weeks to hear back. Not any longer!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-3.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Rob Badland</h2><small class="ab-testimonial-title" style="color:#32373c">Consultant</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":5,"align":"full","paddingTop":15,"paddingRight":5,"paddingBottom":15,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-contact-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-contact-1 ab-layout-columns-2 ab-2-col-equal ab-columns-center alignfull" style="padding-top:15%;padding-right:5%;padding-bottom:15%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-5 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Contact us to get started.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We'd love to hear from you and build out your next dream project. Drop us a line and we'll get back to you as soon as we can!</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-container {"containerMaxWidth":1600} -->
<div class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:paragraph -->
<p><strong>NASA Mission Control Center</strong><br>Clear Lake, Houston, TX 77058</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Email: hello@example.com<br>Phone: 800-854-5841</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Drop us an email!"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="mailto:name@example.com" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Drop us an email!</a></div>
<!-- /wp:atomic-blocks/ab-button -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:html -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3470.5670865756474!2d-95.09152774886842!3d29.558099181973784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86409da671292593%3A0xf684f098a7237a30!2sNASA+Mission+Control+Center!5e0!3m2!1sen!2sus!4v1560875318343!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
<!-- /wp:html --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerWidth":"full","containerMaxWidth":1600,"className":"ab-layout-business-1"} -->
<div class="wp-block-atomic-blocks-ab-container ab-layout-business-1 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":5,"containerPaddingBottom":10,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":850,"containerBackgroundColor":"#0b0b0b","containerImgID":3854,"className":"ab-layout-hero-1"} -->
<div style="background-color:#0b0b0b;padding-left:5%;padding-right:5%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-layout-hero-1 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim" src="https://demo.studiopress.com/page-builder/ab-placeholder-hero.jpg" alt="hero header placeholder"/></div><div class="ab-container-content" style="max-width:850px"><!-- wp:heading {"align":"center","className":"ab-white-text"} -->
<h2 class="has-text-align-center ab-white-text">The future of website creation is here.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center has-text-color" style="color:#ffffff">With Genesis and Atomic blocks, you can build beautiful, powerful websites in minutes with our robust theme framework and professionally-designed sections and layouts</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Launch your new site!","buttonAlignment":"center"} -->
<div style="text-align:center" class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Launch your new site!</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-service-2"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-2 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Beautiful, responsive layouts ready to use.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":4,"layout":"ab-4-col-equal","marginBottom":3,"marginUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-4 ab-4-col-equal" style="margin-bottom:3%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>From the Atomic Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Rock Solid Standards</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Sites Built To Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Beautiful Designs</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Start building your site!","buttonAlignment":"center","buttonBackgroundColor":"#0073e5","buttonSize":"ab-button-size-large"} -->
<div style="text-align:center" class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-large" style="color:#ffffff;background-color:#0073e5">Start building your site!</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":5,"paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-service-3"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-3 ab-layout-columns-2 ab-2-col-equal ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-5 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":3852} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-square-placeholder.jpg" alt="AB Square Placeholder" class="wp-image-3852"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Build blazing websites with Genesis and Atomic Blocks. <br></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress, bringing it in line with modern coding standards, and aligning with open web initiatives. That sounds pretty great huh?</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Try Atomic Blocks Today","buttonBackgroundColor":"#0073e5"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="#" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#0073e5">Try Atomic Blocks Today</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":6,"paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-service-4"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-4 ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-6 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Build creative layouts in minutes with our professionally-designed sections and layouts.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":22}}} -->
<p style="font-size:22px">The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress, bringing it in line with modern coding standards, and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-spacer {"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:heading {"level":3} -->
<h3>Sites Built to Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>From the WPE Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Built-in Templates</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Gutenberg editor uses blocks to create all types of content, replacing a half-dozen ways of customizing WordPress and aligning with open web initiatives. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><br></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":11445} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-tall.jpg" alt="" class="wp-image-11445"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#ffffff","columnMaxWidth":1200,"className":"ab-layout-team-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-team-1 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#ffffff"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Meet our amazing team.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We're a talented group of creative individuals interested in art, cinematography, design, music, and all niches in between.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10230} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10230" src="https://demo.studiopress.com/page-builder/person-m-1.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Kyle Zion</h2><p class="ab-profile-title" style="color:#32373c">Screenprinter</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10211} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10211" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt=""/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Fran Acadia</h2><p class="ab-profile-title" style="color:#32373c">People Engineer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10225} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10225" src="https://demo.studiopress.com/page-builder/person-m-3.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Giannis Teton</h2><p class="ab-profile-title" style="color:#32373c">Office Manager</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10230} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10230" src="https://demo.studiopress.com/page-builder/person-w-5.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Mandi Arches</h2><p class="ab-profile-title" style="color:#32373c">Lead Designer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10211} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10211" src="https://demo.studiopress.com/page-builder/person-m-2.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Walter Bryce</h2><p class="ab-profile-title" style="color:#32373c">Lead Developer</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10225} -->
<div style="background-color:#f2f2f2;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box square ab-has-avatar ab-font-size-18 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10225" src="https://demo.studiopress.com/page-builder/person-w-1.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Kim Rainier</h2><p class="ab-profile-title" style="color:#32373c">Support Specialist</p><div class="ab-profile-text"><p>Add biography text for your team member here. You can also remove this text if you'd rather just have a name and title.</p></div><ul class="ab-social-links"></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f1f1f1","columnMaxWidth":1200,"className":"ab-layout-testimonial-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-testimonial-1 ab-layout-columns-1 one-column ab-has-custom-background-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#f1f1f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">See what our customers are saying.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Our happy customers have a lot to say about our products and services!</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"padding":15} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s really great how easy your websites are to update and manage. I never have any problem at all!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-4.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Mary Sequoia</h2><small class="ab-testimonial-title" style="color:#32373c">Author</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-5.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Marcus Alpine</h2><small class="ab-testimonial-title" style="color:#32373c">Author</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10211,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-1.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Philip Glacier</h2><small class="ab-testimonial-title" style="color:#32373c">Publisher</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10211,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s really great how easy your websites are to update and manage. I never have any problem at all!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-1.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Robin Yellowstone</h2><small class="ab-testimonial-title" style="color:#32373c">Publisher</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s almost like having a designer right here with me. I just choose the page, make the change and click save. It’s so simple.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Amy Redwood</h2><small class="ab-testimonial-title" style="color:#32373c">Consultant</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial -->

<!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>I can't believe how good the customer support is on this product. I'm used to waiting weeks to hear back. Not any longer!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-3.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Rob Badland</h2><small class="ab-testimonial-title" style="color:#32373c">Consultant</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":5,"paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-contact-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-contact-1 ab-layout-columns-2 ab-2-col-equal ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-5 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Contact us to get started.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We'd love to hear from you and build out your next dream project. Drop us a line and we'll get back to you as soon as we can!</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-container {"containerMaxWidth":1600} -->
<div class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:paragraph -->
<p><strong>NASA Mission Control Center</strong><br>Clear Lake, Houston, TX 77058</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Email: hello@example.com<br>Phone: 800-854-5841</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Drop us an email!"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a href="mailto:name@example.com" class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Drop us an email!</a></div>
<!-- /wp:atomic-blocks/ab-button -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:html -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3470.5670865756474!2d-95.09152774886842!3d29.558099181973784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86409da671292593%3A0xf684f098a7237a30!2sNASA+Mission+Control+Center!5e0!3m2!1sen!2sus!4v1560875318343!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
<!-- /wp:html --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerWidth":"full","containerMaxWidth":1600,"className":"ab-layout-landing-1"} -->
<div class="wp-block-atomic-blocks-ab-container ab-layout-landing-1 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","marginUnit":"%","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#2b2953","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#2b2953"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"customBackgroundColor":"#5f58e5","customTextColor":"#ffffff","paddingSync":true,"paddingUnit":"%","padding":8,"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner ab-has-custom-background-color ab-has-custom-text-color" style="padding:8%;background-color:#5f58e5;color:#ffffff"><!-- wp:heading -->
<h2>Launch your latest product with Atomic Blocks layouts! </h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use the professionally-designed sections and layouts to launch your new product site, complete with a Mailchimp email newsletter block.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/newsletter /--></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":11790} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-illustration-4.png" alt="" class="wp-image-11790"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1200,"className":"ab-layout-service-2"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-2 ab-layout-columns-1 one-column ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Beautiful, responsive layouts ready to use.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Add beautiful illustrations from UnDraw, a constantly updated collection of images that you can use completely free in your sections and layouts. Or add your own!</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal","marginBottom":3,"marginUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal" style="margin-bottom:3%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"align":"center","id":11799,"width":230} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-illustration-1-500px.png" alt="" class="wp-image-11799" width="230"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>From the Atomic Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"align":"center","id":11798,"width":230} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-illustration-2-500px.png" alt="" class="wp-image-11798" width="230"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>Rock Solid Standards</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"align":"center","id":11831,"width":270} -->
<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-illustration-3-500px.png" alt="" class="wp-image-11831" width="270"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>Sites Built To Last</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The new editor comes with a handful of default blocks such as paragraph, image, gallery, and more, to help you create better standard posts and pages.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":1,"layout":"one-column","paddingTop":10,"paddingRight":5,"paddingBottom":10,"paddingLeft":5,"paddingUnit":"%","customTextColor":"#ffffff","customBackgroundColor":"#2b2953","columnMaxWidth":1200,"className":"ab-layout-testimonial-1"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-testimonial-1 ab-layout-columns-1 one-column ab-has-custom-background-color ab-has-custom-text-color ab-columns-center" style="padding-top:10%;padding-right:5%;padding-bottom:10%;padding-left:5%;background-color:#2b2953;color:#ffffff"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-container {"containerMarginBottom":5,"containerMaxWidth":700} -->
<div style="margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">See what they're saying.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Our happy customers have a lot to say about our products and services!</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"padding":15} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s really great how easy your websites are to update and manage. I never have any problem at all!</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-4.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Mary Sequoia</h2><small class="ab-testimonial-title" style="color:#32373c">Author</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10211,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>My new site is so much faster and easier to work with than my old site. It used to take me an hour or more to update a page.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-m-1.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Philip Glacier</h2><small class="ab-testimonial-title" style="color:#32373c">Publisher</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-testimonial {"testimonialImgID":10230,"testimonialBackgroundColor":"#ffffff"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-testimonial left-aligned ab-has-avatar ab-font-size-18 ab-block-testimonial"><div class="ab-testimonial-text"><p>It’s almost like having a designer right here with me. I just choose the page, make the change and click save. It’s so simple.</p></div><div class="ab-testimonial-info"><div class="ab-testimonial-avatar-wrap"><div class="ab-testimonial-image-wrap"><img class="ab-testimonial-avatar" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt="avatar"/></div></div><h2 class="ab-testimonial-name" style="color:#32373c">Amy Redwood</h2><small class="ab-testimonial-title" style="color:#32373c">Consultant</small></div></div>
<!-- /wp:atomic-blocks/ab-testimonial --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":5,"containerPaddingBottom":10,"containerPaddingLeft":5,"containerMaxWidth":1200} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:atomic-blocks/ab-pricing {"columns":3} -->
<div class="wp-block-atomic-blocks-ab-pricing ab-pricing-columns-3"><div class="ab-pricing-table-wrap ab-block-pricing-table-gap-2"><!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":0,"backgroundColor":"#ebebef","padding":8} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="background-color:#ebebef;padding:8%"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003eFreelancer\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Freelancer</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"Our essentials package with tools for freelancers.","customFontSize":20} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">Our essentials package with tools for freelancers.</div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"49","currency":"$","term":"/mo"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">49</div><span class="ab-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Product Feature One</li><li>Product Feature Two</li><li>Product Feature Three</li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#5f58e5","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#5f58e5">Buy Now</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":0,"backgroundColor":"#ebebef","padding":8} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="background-color:#ebebef;padding:8%"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003eAgency\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Agency</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"More tools for active agencies with large client bases.","customFontSize":20} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">More tools for active agencies with large client bases.</div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"89","currency":"$","term":"/mo"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">89</div><span class="ab-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Product Feature One</li><li>Product Feature Two</li><li>Product Feature Three</li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#5f58e5","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#5f58e5">Buy Now</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":0,"backgroundColor":"#ebebef","padding":8} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="background-color:#ebebef;padding:8%"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003eEnterprise\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Enterprise</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"All the tools, updates, and support you need to get started.","customFontSize":20} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle" style="font-size:20px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">All the tools, updates, and support you need to get started.</div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"129","currency":"$","term":"/mo"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">129</div><span class="ab-pricing-table-term" style="font-size:24px">/mo</span></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":20,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li>Product Feature One</li><li>Product Feature Two</li><li>Product Feature Three</li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Buy Now","buttonBackgroundColor":"#5f58e5","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-rounded ab-button-size-medium" style="color:#ffffff;background-color:#5f58e5">Buy Now</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table --></div></div>
<!-- /wp:atomic-blocks/ab-pricing --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":5,"paddingTop":5,"paddingRight":5,"paddingBottom":5,"paddingLeft":5,"paddingUnit":"%","customTextColor":"#ffffff","customBackgroundColor":"#5f58e5","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-has-custom-text-color ab-columns-center" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%;background-color:#5f58e5;color:#ffffff"><div class="ab-layout-column-wrap ab-block-layout-column-gap-5 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Ready to join our beta?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We're working hard on our official product, but we'd love to have your feedback on our beta product, launching soon! Use the Mailchimp form to subscribe for updates!</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/newsletter {"instanceId":3} /--></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerWidth":"full","containerMaxWidth":1600,"className":"ab-layout-landing-2"} -->
<div class="wp-block-atomic-blocks-ab-container ab-layout-landing-2 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:atomic-blocks/ab-container {"containerPaddingTop":5,"containerPaddingRight":5,"containerPaddingBottom":5,"containerPaddingLeft":5,"containerMaxWidth":700} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:5%;padding-top:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:700px"><!-- wp:atomic-blocks/ab-profile-box {"profileImgID":10230,"profileBackgroundColor":"#ffffff","profileLinkColor":"#26ad79","profileFontSize":20,"profileAvatarShape":"round","twitter":"#","facebook":"#","instagram":"#","pinterest":"#"} -->
<div style="background-color:#ffffff;color:#32373c" class="wp-block-atomic-blocks-ab-profile-box round ab-has-avatar ab-font-size-20 ab-block-profile ab-profile-columns"><div class="ab-profile-column ab-profile-avatar-wrap"><div class="ab-profile-image-wrap"><figure class="ab-profile-image-square"><img class="ab-profile-avatar wp-image-10230" src="https://demo.studiopress.com/page-builder/person-w-3.jpg" alt="team member avatar"/></figure></div></div><div class="ab-profile-column ab-profile-content-wrap"><h2 class="ab-profile-name" style="color:#32373c">Hi there, I'm Amanda.</h2><p class="ab-profile-title" style="color:#32373c"></p><div class="ab-profile-text"><p>I'm a graphic designer living and working in the Midwest USA. When I'm not pushing the pixels, I'm out exploring the National Parks with my dog, Bolt.</p></div><ul class="ab-social-links"><li><a href="#" target="_blank" rel="noopener noreferrer">Twitter <i style="background-color:#26ad79" class="fab fa-twitter"></i></a></li><li><a href="#" target="_blank" rel="noopener noreferrer">Facebook <i style="background-color:#26ad79" class="fab fa-facebook-f"></i></a></li><li><a href="#" target="_blank" rel="noopener noreferrer">Instagram <i style="background-color:#26ad79" class="fab fa-instagram"></i></a></li><li><a href="#" target="_blank" rel="noopener noreferrer">Pinterest <i style="background-color:#26ad79" class="fab fa-pinterest"></i></a></li></ul></div></div>
<!-- /wp:atomic-blocks/ab-profile-box -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":4,"align":"full","paddingTop":8,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f6f5f1","columnMaxWidth":700,"className":"ab-layout-service-3"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-3 ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:8%;padding-right:5%;padding-bottom:8%;padding-left:5%;background-color:#f6f5f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-4 ab-is-responsive-column" style="max-width:700px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":11968} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-square-3-600px.jpg" alt="" class="wp-image-11968"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>01. Check out my travel photography blog</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I take a lot of photos, and I'd love for you to check them out. Head over to my photography blog to take a look.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Visit the Blog","buttonBackgroundColor":"#26ad79","buttonShape":"ab-button-shape-circular"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a class="ab-button ab-button-shape-circular ab-button-size-medium" style="color:#ffffff;background-color:#26ad79">Visit the Blog</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":4,"align":"full","paddingTop":8,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":700,"className":"ab-layout-service-3"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-3 ab-layout-columns-2 ab-2-col-equal ab-columns-center alignfull" style="padding-top:8%;padding-right:5%;padding-bottom:8%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-4 ab-is-responsive-column" style="max-width:700px"><!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>02. Check out my design portfolio</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Have I mentioned I'm a designer? Maybe even your next designer! Check out my latest design work on the portfolio.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Visit the Portfolio","buttonBackgroundColor":"#26ad79","buttonShape":"ab-button-shape-circular"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a class="ab-button ab-button-shape-circular ab-button-size-medium" style="color:#ffffff;background-color:#26ad79">Visit the Portfolio</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":10225} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-square-1-600px.jpg" alt="" class="wp-image-10225"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":4,"align":"full","paddingTop":8,"paddingRight":5,"paddingBottom":8,"paddingLeft":5,"paddingUnit":"%","customBackgroundColor":"#f6f5f1","columnMaxWidth":700,"className":"ab-layout-service-3"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-service-3 ab-layout-columns-2 ab-2-col-equal ab-has-custom-background-color ab-columns-center alignfull" style="padding-top:8%;padding-right:5%;padding-bottom:8%;padding-left:5%;background-color:#f6f5f1"><div class="ab-layout-column-wrap ab-block-layout-column-gap-4 ab-is-responsive-column" style="max-width:700px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":11962} -->
<figure class="wp-block-image"><img src="https://demo.studiopress.com/page-builder/ab-placeholder-square-2-600px.jpg" alt="" class="wp-image-11962"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>03. Want to get in touch?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I'm always looking for a new challenge. If you think I'd be a good fit for your next job, let's have a chat and see where it goes!</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Contact Me","buttonBackgroundColor":"#26ad79","buttonShape":"ab-button-shape-circular"} -->
<div class="wp-block-atomic-blocks-ab-button ab-block-button"><a class="ab-button ab-button-shape-circular ab-button-size-medium" style="color:#ffffff;background-color:#26ad79">Contact Me</a></div>
<!-- /wp:atomic-blocks/ab-button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","marginBottom":3,"marginUnit":"%","paddingTop":8,"paddingRight":5,"paddingBottom":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":700} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-columns-center" style="margin-bottom:3%;padding-top:8%;padding-right:5%;padding-bottom:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:700px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Pixel Perfectionist</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I have an uncanny attention to detail. You'll find it all throughout my work! I use the Atomic Blocks plugin because it's also crafted with attention to detail.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Expertly Trained</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I studied graphic design for four years under the great designer, painter and art educator, Paula Scher. Everything I learned goes into every project I start.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Communicator Extraordinaire </h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Communication is key, as they say! We'll keep in regular contact about any projects we start to ensure you get the end result you're looking for.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Fair, Friendly Pricing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I like to work with each client directly to ensure their project is scoped and priced according to the specs. We'll work through the costs before we even start.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-cta {"buttonText":"Let's connect!","buttonBackgroundColor":"#26ad79","buttonShape":"ab-button-shape-circular","ctaBackgroundColor":"#f6f5f1"} -->
<div style="background-color:#f6f5f1;text-align:center" class="wp-block-atomic-blocks-ab-cta ab-block-cta"><div class="ab-cta-content"><h2 class="ab-cta-title ab-font-size-32" style="color:#32373c">Drop me a line!</h2><div class="ab-cta-text ab-font-size-32" style="color:#32373c"><p>I'm accepting new clients through the rest of the year. Please drop me a line and we'll get started with your next project!</p></div></div><div class="ab-cta-button"><a target="_self" rel="noopener noreferrer" class="ab-button ab-button-shape-circular ab-button-size-medium" style="color:#ffffff;background-color:#26ad79">Let's connect!</a></div></div>
<!-- /wp:atomic-blocks/ab-cta --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingRight":5,"containerPaddingBottom":0,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1000,"className":"ab-layout-landing-3"} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-atomic-blocks-ab-container ab-layout-landing-3 ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1000px"><!-- wp:cover {"url":"https://demo.studiopress.com/page-builder/ab-placeholder-hero.jpg","id":3852,"hasParallax":true,"dimRatio":80,"align":"full","className":"ab-layout-landing-3-cover"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim has-parallax ab-layout-landing-3-cover" style="background-image:url(https://demo.studiopress.com/page-builder/ab-placeholder-hero.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:heading -->
<h2>A better way to grow your creative business.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideright","paddingTop":10,"paddingBottom":6,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright" style="padding-top:10%;padding-bottom:6%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Get to know me.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph -->
<p>I have an uncanny attention to detail. You’ll find it all throughout my work! I use the Atomic Blocks plugin because it’s also crafted with attention to detail. I studied graphic design for four years under the great designer, painter and art educator, Paula Scher. Everything I learned goes into every project I start.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Communication is key, as they say! We’ll keep in regular contact about any projects we start to ensure you get the end result you’re looking for.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-button {"buttonText":"Check my availability","buttonAlignment":"left","buttonShape":"ab-button-shape-square"} -->
<div style="text-align:left" class="wp-block-atomic-blocks-ab-button ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#3373dc">Check my availability</a></div>
<!-- /wp:atomic-blocks/ab-button -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-spacer {"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideright","paddingTop":7,"paddingBottom":8,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright" style="padding-top:7%;padding-bottom:8%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Frequently asked.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-accordion {"accordionOpen":true,"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details open><summary class="ab-accordion-title">What do you specialize in?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>We specialize in email marketing, web design &amp; development and hosting services. We provide these services individually, as well as a complete package to launch your next project on.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:atomic-blocks/ab-accordion {"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details><summary class="ab-accordion-title">What kind of turn around do you offer?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>A standard size project typically takes about a month to complete. We handle all of the work for you, and communicate everything along the way to ensure you're happy with your outcome!</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-accordion {"className":"ab-font-size-18"} -->
<div class="wp-block-atomic-blocks-ab-accordion ab-font-size-18 ab-block-accordion"><details><summary class="ab-accordion-title">How much does a typical project cost?</summary><div class="ab-accordion-text"><!-- wp:paragraph -->
<p>Prices can vary significantly depending on the size of your project. We handle projects for small agencies, and also large projects that can run upwards of $200k. Our minimum project cost is $5,000.</p>
<!-- /wp:paragraph --></div></details></div>
<!-- /wp:atomic-blocks/ab-accordion --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-spacer {"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideright","paddingTop":8,"paddingBottom":7,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright" style="padding-top:8%;padding-bottom:7%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>Things I can do.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Pixel Perfectionist</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I have an uncanny attention to detail. You’ll find it all throughout my work! I use the Atomic Blocks plugin because it’s also crafted with attention to detail.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Expertly Trained</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I studied graphic design for four years under the great designer, painter and art educator, Paula Scher. Everything I learned goes into every project I start.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Expert Communicator</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Communication is key, as they say! We’ll keep in regular contact about any projects we start to ensure you get the end result you’re looking for.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Friendly Pricing</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I like to work with each client directly to ensure their project is scoped and priced according to the specs. We’ll work through the costs before we start.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-spacer {"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideright","paddingTop":8,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright" style="padding-top:8%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading -->
<h2>My latest blog posts.</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-post-grid {"postsToShow":2} /--></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/newsletter {"mailingList":"abc123","instanceId":5} /-->
HTML;
