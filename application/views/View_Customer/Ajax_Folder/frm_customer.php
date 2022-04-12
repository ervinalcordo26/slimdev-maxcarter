<input name="refno" type="hidden" class="form-control" value="<?php echo $rec['lrefno'];?>">
<div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Customer ID</label>
  <div class="col-sm-9">
     <input readonly type="text" class="form-control" value="<?php echo $rec['lcustomerid'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Last Name</label>
  <div class="col-sm-9">
     <input name="txtlname" type="text" class="form-control" required value="<?php echo $rec['llname'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">First Name</label>
  <div class="col-sm-9">
     <input name="txtfname" type="text" class="form-control" required value="<?php echo $rec['lfname'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Company</label>
  <div class="col-sm-9">
     <input name="txtcompany" type="text" class="form-control" value="<?php echo $rec['lcompany'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Email</label>
  <div class="col-sm-9">
     <input name="txtemail" type="text" class="form-control" required value="<?php echo $rec['lemail'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Address</label>
  <div class="col-sm-9">
     <textarea name="txtaddress" class="form-control"><?php echo $rec['laddress'];?></textarea>
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">City</label>
  <div class="col-sm-9">
     <input name="txtcity" type="text" class="form-control" value="<?php echo $rec['lcity'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">State</label>
  <div class="col-sm-9">
     <input name="txtstate" type="text" class="form-control" value="<?php echo $rec['lstate'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Country</label>
  <div class="col-sm-9">
     <input name="txtcountry" type="text" class="form-control" value="<?php echo $rec['lcountry'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Postal Code</label>
  <div class="col-sm-9">
     <input name="txtpostalcode" type="text" class="form-control" value="<?php echo $rec['lpostalcode'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Phone</label>
  <div class="col-sm-9">
     <input name="txtphone" type="text" class="form-control" value="<?php echo $rec['lphone'];?>">
  </div>
 </div>
 <div class="position-relative row form-group">
  <label class="col-sm-3 col-form-label">Fax</label>
  <div class="col-sm-9">
     <input name="txtfax" type="text" class="form-control" value="<?php echo $rec['lfax'];?>">
  </div>
 </div>