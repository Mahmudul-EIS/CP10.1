<div class="company">
    <div class="container-fluid">
        <div class="header-top clearfix">
            <div class="col-sm-5">
                <div class="office-details">
                    <p>Head Office & Factory:</br>
                        No 2, Jalan Asam Jawa 16/15 Seksyen 16,</br>
                        Kawasan Perindustrian Shah Alam.</br>
                        40200,Shah Alam, Selangor Darul Ehsan </br>
                        Tel;03-6541635</br>
                        Fax: 03-678756</br>
                        Email:indkom@tm.net.my</br>
                        Web:www.indkom.com</p>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-4">
                <div class="logo logo-right"><h2>INDKOM</h2><p>ENGINEERING SDN . BHD</p></div>
            </div>
        </div>
    </div>
</div>
<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <div class="deviler-details clearfix">
                    <div class="col-sm-6">
                        <div class="deliver-item">
                            <h4>DELIVER TO :</h4>
                            <p><?= h($nbdo->del_to) ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <div class="delivery-order">
                            <div class="order-btn">
                                <p class="order-no"><span>Delivery Order no :</span> <?= h($nbdo->do_no) ?></p>
                                <p class="biling">NON BILLING</p>
                            </div>
                            <div class="prepared-table">
                                <div class="prepared-by-item">
                                    <h2>Prepared by</h2>
                                    <h3 class="author-name"><?= h($nbdo->prepared_by) ?></h3>
                                </div
                                    >
                                <div class="prepared-by-item">
                                    <h2>Date</h2>
                                    <h3 class="date"><?= h($nbdo->date) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>PART NO</th>
                            <th>QUANTITY</th>
                            <th>PART NAME</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="row-height"><?= h($nbdo->part_no) ?></td>
                            <td class="row-height"><?= h($nbdo->qty) ?></td>
                            <td class="row-height"><?= h($nbdo->part_name) ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>