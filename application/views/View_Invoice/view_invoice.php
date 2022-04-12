                </div>
                    </div>            
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('dashboard'); ?>" method="POST">
                                    	<div class="row">
                                            <div class="col-sm-8">
                                                <h5 class="card-title">Your Invoice List</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="card-title pull-right">
                                                    <a href="#addinvoice" data-toggle="modal">
                                                        <button type="button" class="btn-shadow btn btn-info">
                                                            <span class="btn-icon-wrapper pr-2">
                                                                <i class="fa fa-plus fa-w-20"></i> Add Record
                                                            </span>
                                                        </button>
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                        <?php if(empty($recordlist)) { ?>
                                        <div class="row">

                                            <div class="widget-content col-lg-12">
                                                <center>
                                                    <div class="widget-numbers text-primary"><span>No Page Record</span></div>
                                                </center>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <thead>
                                                <tr>

                                                    <th width="4%">#</th>
                                                    <th><span data-toggle="tooltip" data-placement="bottom" title="Invoice ID">Invoice ID</span></th>
                                                    <th><span data-toggle="tooltip" data-placement="bottom" title="Name">Name</span></th>
                                                    <th><span data-toggle="tooltip" data-placement="bottom" title="Invoice Date">Invoice Date</span></th>
                                                    <th><span data-toggle="tooltip" data-placement="bottom" title="Total">Total</span></th>
                                                    <th><span data-toggle="tooltip" data-placement="bottom" title="Action">Action</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x = 1;?>
                                                <?php foreach ($recordlist as $key => $value) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $x++;?></th>
                                                    <td><?php echo $value['linvoiceno'];?></td>
                                                    <td><?php echo $value['lfname']." ".$value['llname'];?></td>
                                                    <td><?php echo $value['linvoicedate'];?></td>
                                                    <td>$ <?php echo number_format($value['ltotal'],2);?></td>
                                                    <td><a data-toggle="modal" href="#viewinvoice" onclick="editinvoice('<?php echo $value['lrefno'];?>');"><i class="fa fa-edit"></i></a></td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


