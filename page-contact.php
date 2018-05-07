<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/document-min.css">
<!-- end modal-main -->
<?php include_once("nav.php"); ?>
<main id="top" class="content">
  <section id="contact">
    <div class="contact_inr">
      <h2><span class="en">CONTACT</span>お問い合わせ</h2>
      <div id="document" class="contact_inr_input"><!--本番公開はkey19 ローカル環境は6070-->
        <?php echo do_shortcode( '[mwform_formkey key="19"]' ); ?>
      </div>
    </div>
  </section>
  <!-- end contact-->
</main>
<!-- end main -->
<?php get_footer(); ?>