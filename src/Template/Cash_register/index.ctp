<?php echo $this->Html->script(array('jquery-git.js','jquery.mockjax.js','bootstrap.min.js','bootstrap-editable.js','Products.js')); ?>
<div id="register">
  <div id="ticket">
    <h1>Thank You!</h1>
    <table>
      <tbody id="entries">
      </tbody>
      <tfoot>
        <tr>
          <th>Total</th>
          <th id="total">$0.00</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <form id="entry">
    <input id="newEntry" autofocus placeholder="How Much?">
  </form>
</div>