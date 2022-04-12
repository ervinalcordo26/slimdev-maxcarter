<input name="refno" type="hidden" class="form-control" value="<?php echo $rec['lrefno'];?>">
<div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Invoice ID</label>
  <div class="col-sm-9">
     <input readonly type="text" class="form-control" value="<?php echo $rec['linvoiceno'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Invoice Date</label>
  <div class="col-sm-9">
     <input readonly type="text" class="form-control" value="<?php echo $rec['linvoicedate'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Customer Name</label>
  <div class="col-sm-9">
    <input readonly type="text" class="form-control" value="<?php echo $rec['lfname']." ".$rec['llname'];?>">
     
  </div>
 </div>
 
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Billing Address</label>
  <div class="col-sm-9">
     <textarea name="txtaddress" class="form-control"><?php echo $rec['lbillingaddress'];?></textarea>
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Billing City</label>
  <div class="col-sm-9">
     <input name="txtcity" type="text" class="form-control" value="<?php echo $rec['lbillingcity'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Billing State</label>
  <div class="col-sm-9">
     <input name="txtstate" type="text" class="form-control" value="<?php echo $rec['lbillingstate'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Billing Country</label>
  <div class="col-sm-9">
     <input name="txtcountry" type="text" class="form-control" value="<?php echo $rec['lbillingcountry'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Billing Postal Code</label>
  <div class="col-sm-9">
     <input name="txtpostalcode" type="text" class="form-control" value="<?php echo $rec['lbillingpostal'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Total</label>
  <div class="col-sm-9">
     <input name="txttotal" type="number" class="form-control" required value="<?php echo $rec['ltotal'];?>">
  </div>
 </div>