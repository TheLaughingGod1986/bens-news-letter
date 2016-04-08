<div class="container-fluid">
    <h2>Account Overview</h2>
    <hr>
    
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr style="background: rgba(134, 240, 133, 0.31); text-align: center;">
                <td><h4>Account Name</h4></td>
                <td id="desktop-content"><h4>Initial Deposit Date</h4></td>
                <td id="desktop-content"><h4>Interest Rate</h4></td>
                <td id="desktop-content"><h4>Monthly Deposit</h4></td>
                <td id="desktop-content"><h4>Days Till Account Maturity</h4></td>
                <td id="desktop-content"><h4>Total Interest</h4></td>
                <td id="mobile-content"><h4>Interest</h4></td>
                <td id="desktop-content"><h4>Total Balance</h4></td>
                <td id="mobile-content"><h4>Balance</h4></td>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($records)) :
            foreach ($records as $row) : ?>
                
                <tr style="background-color: rgba(94, 101, 255, 0.29); text-align: center;">
                    <td><?php echo $row->bank_name; ?></td>
                    <td id="desktop-content"><strong><?php echo $newDate; ?></strong></td>
                    <td id="desktop-content"><strong><?php echo $row->interest * 100; ?>%</strong> Interest</td>
                    <td id="desktop-content"><strong>£<?php echo $row->monthly_deposits; ?></strong> (PCM)</td>
                    <td id="desktop-content"><strong><?php echo $remain; ?></strong> Days Left</td>
                    <td id="desktop-content">
                        <strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong><br>
                        <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months Old
                    </td>
                    <td id="mobile-content"><strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong>
                    </td>
                    <td id="desktop-content">
                        <strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong><br>
                        <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months Old
                    </td>
                    <td id="mobile-content"><strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td id="desktop-content" colspan="5"><h4>Total Savings To Date</h4></td>
                <td id="mobile-content" colspan="2"><h4>Total Savings To Date</h4></td>
                <td id="desktop-content" colspan="2">
                    <strong>£<?php echo round($grandTotal, 2, PHP_ROUND_HALF_UP); ?></strong></td>
                <td id="mobile-content" colspan="1">
                    <strong>£<?php echo round($grandTotal, 2, PHP_ROUND_HALF_UP); ?></strong></td>
            </tr>
            </tfoot>
        </table>
    </div>
    <strong id="mobile-content">For full breakdown of your accounts please view on a Tablet or Desktop</strong>
<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>
</div>