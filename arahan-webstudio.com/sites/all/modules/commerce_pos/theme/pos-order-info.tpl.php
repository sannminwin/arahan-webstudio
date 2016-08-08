<div class="pos-order-info">
  <div class="order-number"><?php print t('Order:'); ?> <span><?php print $order->order_id ? $order->order_id : t('New Order'); ?></span></div>
  <div class="order-customer"><?php print t('Customer:'); ?> <span><?php print format_username(user_load($order->uid)); ?></span></div>
  <div class="order-status"><?php print t('Status:'); ?> <span><?php print commerce_order_status_get_title($order->status); ?></span></div>
  <div class="payment-totals">
  <?php print theme('table', array('rows' => $rows, 'attributes' => array('class' => array('payment-totals-table')))); ?>
  <?php print $form; ?>
</div>
<div class="line-item-summary">
  <?php if ($quantity_raw): ?>
  <div class="line-item-quantity">
    <span class="line-item-quantity-raw"><?php print $quantity_raw; ?></span> <span class="line-item-quantity-label"><?php print $quantity_label; ?></span>
  </div>
  <?php endif; ?>
  <?php if ($total): ?>
  <div class="line-item-total">
    <span class="line-item-total-label"><?php print $total_label; ?></span> <span class="line-item-total-raw"><?php print $total; ?></span>
  </div>
  <?php endif; ?>
  <?php print $links; ?>
</div>

</div>