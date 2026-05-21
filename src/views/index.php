Home Page
<hr/>
<div>
    <?php if (!empty($invoice)): ?>
        Invoice ID: <?= $invoice['id'] ?> <br/>
        Invoice Amount: <?= $invoice['amount'] ?> <br/>
        User: <?= $invoice['full_name'] ?> <br/>
    <?php endif ?>
</div>