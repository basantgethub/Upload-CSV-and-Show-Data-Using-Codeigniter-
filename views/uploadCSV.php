    
    <html>
        <head>
        </head>
        <body>
            <div class="row">
                <div class="col-md-12">
                    <h3>CSV File Uploa</h3>
                    <h3>
                        <span style="font-size:16px; color:red;"></span></h3>
                        <div class="row">
                              <div class="col-md-6">
                                   <form class="form" id="csv_form" style="margin-top:0px;" action = "<?php echo base_url('index.php/customize/uploadCSVFile').'?submit=1';?>" ENCTYPE="multipart/form-data" METHOD=POST>
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
                </div> 
            </div> 
        </body>
    </html>        
