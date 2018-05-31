<div class="trf-reporting-section">
    <div class="container">
        <div class="row">
            <div class="trf-title text-uppercase text-center">Material Issue Ticket Single Report</div>

            <h3 class="title">Material Issue Ticket Information</h3>
            <!-- trf number 1 -->
            <div class="clearfix">
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                       <div class="row">
                          <div class="col-sm-6 col-xs-6">
                              <span><b>No :</b></span>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                              <span><?= $this->Number->format($materialIssueTicket->id) ?></span>
                          </div>
                        </div>


                      <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <span><b>Date :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($materialIssueTicket->date) ?></span>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <span><b>Section :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($materialIssueTicket->section) ?></span>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <span><b>MIT No :</b></span>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <span><?= h($materialIssueTicket->mit_no) ?></span>
                        </div>
                      </div>

                    </div>
                </div><!-- trf number 1 -->

                <!-- trf number 2 -->
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                      <div class="row">
                          <div class="col-sm-6 col-xs-6">
                              <span><b>Ref :</b></span>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                              <span><?= h($materialIssueTicket->ref) ?></span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6 col-xs-6">
                              <span><b>Tender No/SO No :</b></span>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                              <span><?= h($materialIssueTicket->so_no) ?></span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6 col-xs-6">
                              <span><b>Approval :</b></span>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                              <span><?= h($materialIssueTicket->approve) ?></span>
                          </div>
                        </div>

                       <div class="row">
                          <div class="col-sm-6 col-xs-6">
                              <span><b>Status :</b></span>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                              <span><?= h($materialIssueTicket->stat) ?></span>
                          </div>
                        </div>
                    </div>
                </div><!-- trf number 2 -->
              </div>
              <h3 class="title">Material Issue Ticket Information-2</h3>
            

            <!-- trf number 3 -->
            <div class="col-sm-6 col-xs-12">
                <div class="trf-step">
                  <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <span><b>Document :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= $this->Number->format($materialIssueTicket->id) ?></span>
                    </div>
                 </div>
                    
                  <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <span><b>Remarks :</b></span>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <span><?= h($materialIssueTicket->remarks) ?></span>
                    </div>
                  </div>
                </div>
            </div><!-- trf number 3 -->

        </div>
    </div>
</div>
</div>