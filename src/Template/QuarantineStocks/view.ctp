<div class="trf-reporting-section">
    <div class="container">
        <div class="row">
            <div class="trf-title text-uppercase text-center">QS Single Report</div>

            <h3 class="title">Quarantine Stock Information</h3>
            <!-- trf number 1 -->
            <div class="clearfix">
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                        <div class="col-sm-6 col-xs-6">
                            <span><b>No :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= $this->Number->format($qs->id) ?></span>
                        </div>



                        <div class="col-sm-6 col-xs-6">
                            <span><b>Date :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->date) ?></span>
                        </div>



                        <div class="col-sm-6  col-xs-6">
                            <span><b>Tender No :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->tender_no) ?></span>
                        </div>



                        <div class="col-sm-6 col-xs-6">
                            <span><b>PRN No :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->prn_no) ?></span>
                        </div>

                    </div>
                </div><!-- trf number 1 -->

                <!-- trf number 2 -->
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                        <div class="col-sm-6 col-xs-6">
                            <span><b>TRS Code :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->trs_code) ?></span>
                        </div>


                        <div class="col-sm-6 col-xs-6">
                            <span><b>Part No :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->part_no) ?></span>
                        </div>


                        <div class="col-sm-6 col-xs-6">
                            <span><b>Part Name :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->part_name) ?></span>
                        </div>


                        <div class="col-sm-6 col-xs-6">
                            <span><b>Status :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($qs->quantity) ?></span>
                        </div>
                    </div>
                </div><!-- trf number 2 -->
            </div>

            <h3 class="title">Quarantine Stocks Information-2</h3>

            <!-- trf number 3 -->
            <div class="col-sm-6 col-xs-12">
                <div class="trf-step">

                    <div class="col-sm-6 col-xs-6">
                        <span><b>Rack :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($qs->rack) ?></span>
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <span><b>BIN :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($qs->bin) ?></span>
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <span><b>Level :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($qs->level) ?></span>
                    </div>
                </div>
            </div><!-- trf number 3 -->

            <!-- trf number 3 -->
            <div class="col-sm-6 col-xs-12">
                <div class="trf-step">

                    <div class="col-sm-6 col-xs-6">
                        <span><b>PIC Store :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($qs->pic_store) ?></span>
                    </div>
 
                    <div class="col-sm-6 col-xs-6">
                        <span><b>PIC Section :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($qs->pic_section) ?></span>
                    </div>

                </div>
            </div><!-- trf number 3 -->

        </div>
    </div>
</div>