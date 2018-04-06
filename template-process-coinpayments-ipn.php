<?php
/**
 * Custom template for displaying the process coinpayments ipn
 *
 * Template Name: Process Coinpayments IPN Test
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bitcoin_broker
 */
get_header(); ?>

<div class="outer-wrapper clearfix">
  <div id="process-coinpayments" class="page-wrapper wrapper clearfix">

    <?php get_template_part('template-parts/section', 'page-feat-img'); ?>

    <div class="container">
      <form action="/process-coinpayments-ipn/" method="post">
        First name: <input type="email" name="email" value="<?php echo $_POST['email']; ?>"><br>
        <input type="submit" value="Submit">
      </form>


      <?php

      if ( isset($_POST['email']) ) {
        $email = $_POST['email'];
        ?>
        <p>Email submitted:  <?php echo $email; ?></p>

        <?php

        $user = get_user_by( "email", $email );
        echo '<pre>';
        var_dump($user);
        echo '</pre>';?>

        <?php
        if ( function_exists( 'rcp_add_user_to_subscription' ) ) {

          if ($user) {

            $user_id = $user;

            $expiration = date( 'Y-m-d 23:59:59', strtotime( '+1 month', current_time( 'timestamp' ) ) );

            $args = array(
                'subscription_id'    => 1,
                'status'             => 'active',
                'expiration'         => date( 'Y-m-d 23:59:59', strtotime( '+1 month', current_time( 'timestamp' ) ) ),
                // 'discount_code'      => '100off_paidwithcrypto'

                );

            rcp_add_user_to_subscription( $user_id, $args );

          }
          ?>

          <p><?php echo $_POST['email']; ?> subscription set to active! Expiration <?php echo $expiration; ?></p>

          <?php
        }
      }

      ?>
    </div>


  </div><!-- end of .wrapper -->
</div><!-- end of .outer-wrapper -->

<?php get_footer();
