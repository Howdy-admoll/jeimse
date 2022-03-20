<?php
/**
 *  Dokan Seller Enabled/Disabled warning Notice
 *
 *  @since 2.4
 *
 *  @package dokan
 */
?>
<div class="dokan-alert dokan-alert-warning">
    <strong><?php esc_attr_e( 'Error!', 'dokan-lite' ); ?></strong>
    <?php esc_attr_e( 'Your account is not enabled for selling, https://paystack.com/pay/sellerfee', 'dokan-lite' ); ?>
</div>


<!-- for new entry
    <div class="dokan-alert dokan-alert-warning">
        <strong><?php esc_attr_e( 'Error!', 'dokan-lite' ); ?></strong>
        <?php esc_attr_e( 'Your account is not enabled for selling, Kindly make your payment to Activate your account.', 'dokan-lite' ); ?>
        <?php echo ' <a href="https://paystack.com/pay/sellerfee" style="color: green;"><b>click here</b></a> to make payment.';?>
    </div>
 -->