
    <div class="row">
        <div class="col-md-12">
            <h3>CSV File Uploa</h3>
            <iframe width="100%" height="400px" frameborder="0" src="" > 
            <h3><span style="font-size:16px; color:red;"></span></h3>
                  <div class="row">
                      <div class="col-md-6">
                         <!-- <form class="form" id="csv_form" style="margin-top:0px;" action = "<?php print $this->appUrls['BRAND_NOTIFICATION_UPLOAD_CSV_SUBSCRIBER_URL'].'&submit=1';?>" ENCTYPE="multipart/form-data" METHOD=POST>-->
                         
                         <form class="form" id="csv_form" style="margin-top:0px;" action = "<?php print $this->appUrls['BRAND_NOTIFICATION_UPLOAD_CSV_SUBSCRIBER_URL'].'&submit=1';?>" ENCTYPE="multipart/form-data" METHOD=POST>
                              <div class="form-group">
                                  <label style="font-weight: normal;">CsV file</label>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <input type="file" id="file" name="file_csv" />
                                      </div>    
                                  </div>
                              </div>
          
                              <div class="form-group">
                                  <label></label>
                                  <div>
                                      <button class = "editCSVFile btn btn-primary btn-lg" type="submit" id="submit" value="update">Upload CsV</button>
                                  </div>
                              </div>
                        </form>
                      </div>
                  </div>
            </iframe>
        </div> 
    </div> 
