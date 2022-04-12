function edit_optins_record(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('idemailgrouprec').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/getemail_recordgroup_edit",
	      data: 
	      { 
	        refno: refno,
	      },
	      success: function(result){  
	      	document.getElementById('idemailgrouprec').innerHTML = result;
	      	test();
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function view_optins_record(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('id_emailrecord2_container').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/getemail_recordgroup",
	      data: 
	      { 
	        refno: refno,
	      },
	      success: function(result){  
	      	document.getElementById('id_emailrecord2_container').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function delete_emailrecgroup(groupref, recref) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('id_emailrecord_container').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/deletegetemail_recordgroup",
	      data: 
	      { 
	        groupref: groupref,
	        recref: recref,
	      },
	      success: function(result){ 
	      	document.getElementById('id_emailrecord_container').innerHTML = result;
	      	refresh_table_emailgroup();

	      	
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function deleteRow(r) {

  var i = r.parentNode.parentNode.parentNode.rowIndex;
  document.getElementById("record_table").deleteRow(i);
}
function refresh_table_emailgroup() {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('main_table_container').innerHTML = '<center><img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...</center>';

    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/refresh_table_specific",
	      data: 
	      { 
	        table: 1,
	        			//	1	- 	Email Group
	      },
	      success: function(result){ 
	      	document.getElementById('main_table_container').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function refresh_table() {
	//THIS FUNCTION IS UNFINISHED
	var baseurl = document.getElementById('baseurl').value;
	var table = "";
	var field1 = "";
	var field2 = "";
	var var1 = "";
	var var2 = "";

	document.getElementById('main_table_container').innerHTML = '<center><img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...</center>';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/reset_table",
	      data: 
	      { 
	        table: table,
	        field1: field1,
	        field2: field2,
	        var1: var1,
	        var2: var2,
	      },
	      success: function(result){ 
	      	document.getElementById('main_table_container').innerHTML = result;
	      	view_optins_record(groupref);
	      	refresh_table();
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function create_email_refresh() {
	var baseurl = document.getElementById('baseurl').value;
	var campaign_projectrefno = document.getElementById('campaign_projectrefno').value;

	document.getElementById('create_container_email').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/create_container_email",
	      data: 
	      { 
	        projectrefno: campaign_projectrefno,
	      },
	      success: function(result){  

	      	document.getElementById('create_container_email').innerHTML = result;
	      	create_emailgroup_getcount();
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function create_emailgroup_getcount() {
	
	var baseurl = document.getElementById('baseurl').value;
	var campaign_projectrefno = document.getElementById('campaign_projectrefno').value;
	var campaign_lpname1 = document.getElementById('campaign_lpname1').value;
	var campaign_country1 = document.getElementById('campaign_country1').value;
	var campaign_device1 = document.getElementById('campaign_device1').value;
	var campaign_period1 = document.getElementById('campaign_period1').value;
	var campaign_monthfrom1 = document.getElementById('campaign_monthfrom1').value;
	var campaign_yearfrom1 = document.getElementById('campaign_yearfrom1').value;
	var campaign_monthto1 = document.getElementById('campaign_monthto1').value;
	var campaign_yearto1 = document.getElementById('campaign_yearto1').value;

	document.getElementById('campaign-action1').disabled = true;
	if(campaign_period1=="ALL") {
		document.getElementById('campaign_container1').style.display = "none";
	} else {
		document.getElementById('campaign_container1').style.display = "";
	}
	document.getElementById('campaign-log1').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
	//alert(baseurl+"ajax/campaignpage/1");
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/email_getrecord/1",
	      data: 
	      { 
	      	campaign_projectrefno: campaign_projectrefno,
	        campaign_lpname1: campaign_lpname1,
	        campaign_country1: campaign_country1,
	        campaign_device1: campaign_device1,
	        campaign_period1: campaign_period1,
	        campaign_monthfrom1: campaign_monthfrom1,
	        campaign_yearfrom1: campaign_yearfrom1,
	        campaign_monthto1: campaign_monthto1,
	        campaign_yearto1: campaign_yearto1,
	      },
	      success: function(result){  
	      	//document.getElementById('campaign-log1').innerHTML = result;
	      	
	      	if(parseInt(result)>0) {
	      		var text = "records";
	      		if(parseInt(result)==1) {
	      			text = "record"
	      		}
	      		document.getElementById('campaign-log1').innerHTML = parseInt(result)+" "+text+" selected.";
	      		document.getElementById('campaign-action1').disabled = false;
	      		
	      	} else {
	      		document.getElementById('campaign-log1').innerHTML = "No record found.";
	      		document.getElementById('campaign-action1').disabled = true;
	      	}
	      	
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function create_emailgroup_getrecord() {
	var baseurl = document.getElementById('baseurl').value;
	var campaign_projectrefno = document.getElementById('campaign_projectrefno').value;
	var campaign_lpname1 = document.getElementById('campaign_lpname1').value;
	var campaign_country1 = document.getElementById('campaign_country1').value;
	var campaign_device1 = document.getElementById('campaign_device1').value;
	var campaign_period1 = document.getElementById('campaign_period1').value;
	var campaign_monthfrom1 = document.getElementById('campaign_monthfrom1').value;
	var campaign_yearfrom1 = document.getElementById('campaign_yearfrom1').value;
	var campaign_monthto1 = document.getElementById('campaign_monthto1').value;
	var campaign_yearto1 = document.getElementById('campaign_yearto1').value;
	document.getElementById('id_emailrecord_container').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
	//alert(baseurl+"ajax/campaignpage/1");
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/email_getrecord/2",
	      data: 
	      { 
	      	campaign_projectrefno: campaign_projectrefno,
	        campaign_lpname1: campaign_lpname1,
	        campaign_country1: campaign_country1,
	        campaign_device1: campaign_device1,
	        campaign_period1: campaign_period1,
	        campaign_monthfrom1: campaign_monthfrom1,
	        campaign_yearfrom1: campaign_yearfrom1,
	        campaign_monthto1: campaign_monthto1,
	        campaign_yearto1: campaign_yearto1,
	      },
	      success: function(result){  
	      	
	      	document.getElementById('id_emailrecord_container').innerHTML = result;

	      	
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function group_type_change(type) {
	
	if(type=="1") {
		var grouptype = document.getElementById('emailgroup_type').value;
		if(grouptype=="existing") {
			document.getElementById('campaign_existinggroup_container').style.display = "";
			document.getElementById('campaign_creategroup_container').style.display = "none";
			document.getElementById('campaign_groupname1').required = false;
			document.getElementById('existinggroupid').required = true;
		} else {
			document.getElementById('campaign_existinggroup_container').style.display = "none";
			document.getElementById('campaign_creategroup_container').style.display = "";
			document.getElementById('campaign_groupname1').required = true;
			document.getElementById('existinggroupid').required = false;
		}
	} else if(type=="2") {
		var grouptype = document.getElementById('emailgroup_manualtype').value;
		if(grouptype=="existing") {
			document.getElementById('campaign_manualexistinggroup_container').style.display = "";
			document.getElementById('campaign_manualcreategroup_container').style.display = "none";
			document.getElementById('campaign_manualgroupname1').required = false;
			document.getElementById('manualexistinggroupid').required = true;
		} else {
			document.getElementById('campaign_manualexistinggroup_container').style.display = "none";
			document.getElementById('campaign_manualcreategroup_container').style.display = "";
			document.getElementById('campaign_manualgroupname1').required = true;
			document.getElementById('manualexistinggroupid').required = false;
		}
	}
}