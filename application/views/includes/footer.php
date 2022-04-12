<?php
require_once("./application/views/includes/notification_input.php");
?>
<style type="text/css">
  pre {

      white-space: pre-wrap;

  }
</style>
<input type="hidden" id="baseurl" value="<?php echo base_url();?>">
               <div class="app-wrapper-footer">
                  <div class="app-footer">
                     <div class="app-footer__inner">
                        <div class="app-footer-left">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="<?php echo base_url();?>application/views/assets/scripts/main.js"></script>

   </body>
</html>

<div class="modal fade " id="addinvoice" tabindex="-1" role="dialog" aria-labelledby="addinvoicenameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addinvoicelbl">Add Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/invoices'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frmemployee-add">
                       
                        <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Invoice ID</label>
                          <div class="col-sm-9">
                             <input readonly name="txtinvno" type="text" class="form-control" value="<?php echo $invoiceno;?>">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Customer Name</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="txtcustomer" required>
                              <?php foreach ($customerlist as $key => $value) { ?>
                                <option value="<?php echo $value['lrefno'];?>"><?php echo $value['lfname']." ".$value['llname'];?></option>    
                              <?php } ?> 
                            </select>
                             
                          </div>
                         </div>

                         
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Billing Address</label>
                          <div class="col-sm-9">
                             <textarea name="txtaddress" class="form-control"></textarea>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Billing City</label>
                          <div class="col-sm-9">
                             <input name="txtcity" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Billing State</label>
                          <div class="col-sm-9">
                             <input name="txtstate" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Billing Country</label>
                          <div class="col-sm-9">
                             <input name="txtcountry" type="text" class="form-control" >
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Billing Postal Code</label>
                          <div class="col-sm-9">
                             <input name="txtpostalcode" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Total</label>
                          <div class="col-sm-9">
                             <input name="txttotal" type="number" class="form-control" required>
                          </div>
                         </div>
                         
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="2" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade " id="viewinvoice" tabindex="-1" role="dialog" aria-labelledby="viewinvoicenameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editinvoice">Update Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/invoices'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frminvoice-edit">
                       
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="1" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade " id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="addcustomernameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addcustomerlbl">Add Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/customers'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frmemployee-add">
                       
                        <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Customer ID</label>
                          <div class="col-sm-9">
                             <input readonly name="txtempid" type="text" class="form-control" value="<?php echo $newempno;?>">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                             <input name="txtlname" type="text" class="form-control" required>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                             <input name="txtfname" type="text" class="form-control" required>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Company</label>
                          <div class="col-sm-9">
                             <input name="txtcompany" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                             <input name="txtemail" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                             <textarea name="txtaddress" class="form-control"></textarea>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                             <input name="txtcity" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                             <input name="txtstate" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                             <input name="txtcountry" type="text" class="form-control" >
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Postal Code</label>
                          <div class="col-sm-9">
                             <input name="txtpostalcode" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                             <input name="txtphone" type="text" class="form-control" >
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Fax</label>
                          <div class="col-sm-9">
                             <input name="txtfax" type="text" class="form-control">
                          </div>
                         </div>
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="2" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade " id="viewcustomer" tabindex="-1" role="dialog" aria-labelledby="viewemployeenameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editemployee">Update Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/customers'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frmcustomer-edit">
                       
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="1" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade " id="addemployee" tabindex="-1" role="dialog" aria-labelledby="addemployeenameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addemployeelbl">Add Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/employees'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frmemployee-add">
                       
                        <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Employee ID</label>
                          <div class="col-sm-9">
                             <input readonly name="txtempid" type="text" class="form-control" value="<?php echo $newempno;?>">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                             <input name="txtlname" type="text" class="form-control" required>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                             <input name="txtfname" type="text" class="form-control" required>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                             <input name="txttitle" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                             <input name="txtemail" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Report To</label>
                          <div class="col-sm-9">
                             <input name="txtreportto" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Birthday</label>
                          <div class="col-sm-9">
                             <input name="txtbirthday" type="date" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Hire Date</label>
                          <div class="col-sm-9">
                             <input name="txthiredate" type="date" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Salary</label>
                          <div class="col-sm-9">
                             <input name="txtsalary" type="number" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                             <textarea name="txtaddress" class="form-control"></textarea>
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                             <input name="txtcity" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                             <input name="txtstate" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                             <input name="txtcountry" type="text" class="form-control" >
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Postal Code</label>
                          <div class="col-sm-9">
                             <input name="txtpostalcode" type="text" class="form-control">
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                             <input name="txtphone" type="text" class="form-control" >
                          </div>
                         </div>
                         <div class="position-relative row form-group">
                          <label class="col-sm-3 col-form-label">Fax</label>
                          <div class="col-sm-9">
                             <input name="txtfax" type="text" class="form-control">
                          </div>
                         </div>
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="2" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade " id="viewemployee" tabindex="-1" role="dialog" aria-labelledby="viewemployeenameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editemployee">Update Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('features/employees'); ?>" name="frmedit" value="1" method="post" autocomplete="off">
               <div class="modal-body">
                   <p class="mb-0" id="frmemployee-edit">
                       
                   </p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="txtsubmit" value="1" type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>/application/views/assets/scripts/jquery.js"></script>
<script type="text/javascript">
  var baseurl = '<?php echo base_url();?>';
  
  function editinvoice(data1) {
    $.ajax({  
      type: 'POST',  
      url: baseurl+"ajax/editinvoices",
      data:
      {
        refno: data1,
      },
      success: function(result){
          document.getElementById('frminvoice-edit').innerHTML = result;
      },
      error: function(request,status,errorThrown) {
        alert("Something went wrong. Please reload the system");
      }
    });
  }
  function editcustomer(data1) {
    $.ajax({  
      type: 'POST',  
      url: baseurl+"ajax/editcustomer",
      data:
      {
        refno: data1,
      },
      success: function(result){
          document.getElementById('frmcustomer-edit').innerHTML = result;
      },
      error: function(request,status,errorThrown) {
        alert("Something went wrong. Please reload the system");
      }
    });
  }
  function editemployee(data1) {

    $.ajax({  
      type: 'POST',  
      url: baseurl+"ajax/editemployee",
      data:
      {
        refno: data1,
      },
      success: function(result){

          document.getElementById('frmemployee-edit').innerHTML = result;
      },
      error: function(request,status,errorThrown) {
        alert("Something went wrong. Please reload the system");
      }
    });
  }
</script>