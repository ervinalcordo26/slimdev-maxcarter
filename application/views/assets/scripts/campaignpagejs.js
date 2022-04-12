function group_type_change(type="1") {
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
}
function click_shareable_page(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('shareable_page_link').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/click_get_shareablepagelink",
	      data: 
	      { 
	        refno: refno,
	      },
	      success: function(result){  
	      	document.getElementById('shareable_page_link').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function shareable_link_copy() {
  /* Get the text field */
  var copyText = document.getElementById("shareable-link");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  $('#notification-container-share').before('<div class="col-sm-12 text-success" id="notification-alert-share"><center>Link Copied!</center></div>');
   $('#notification-alert-share').delay(2000).fadeOut();
   
   document.getElementById('sharebtn-copylink').style.display = "none";
  
}
function click_modify_tracker(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('idmodifytrackerrecord').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/click_modify_trackerrecord",
	      data: 
	      { 
	        refno: refno,
	      },
	      success: function(result){  
	      	document.getElementById('idmodifytrackerrecord').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function tracker_change1(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('idtrackerlinkview1').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/gettracker_link",
	      data: 
	      { 
	        refno: refno,
	        type: 1,
	      },
	      success: function(result){  
	      	document.getElementById('idtrackerlinkview1').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function tracker_change2(refno) {
	var baseurl = document.getElementById('baseurl').value;
	document.getElementById('idtrackerlinkview2').innerHTML = '<img src="'+baseurl+'application/views/assets/images/loader.gif"> Loading...';
    $.ajax({  
	      type: 'POST',  
	      url: baseurl+"ajax/gettracker_link",
	      data: 
	      { 
	        refno: refno,
	        type: 2,
	      },
	      success: function(result){  
	      	document.getElementById('idtrackerlinkview2').innerHTML = result;
	      },
	      error: function(request,status,errorThrown) {
	        alert("System Error Please reload the system ");
	      }
    });
}
function validURL(str) {
  var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
  alert(!!pattern.test(str));
  return !!pattern.test(str);
}
function form_redirectchange_tracker() {
	var baseurl = document.getElementById('baseurl').value;
	var redirect_type = document.getElementById('idtrackerredirecttype').value;
	if(redirect_type=="page") {
		document.getElementById('txtredirectpage').style.display = "";
		document.getElementById('idredirectcustom').style.display = "none";
		document.getElementById("txtredirectpage").required = true;
		document.getElementById("idredirectcustom").required = false;
	} else if(redirect_type=="custom") {
		document.getElementById('txtredirectpage').style.display = "none";
		document.getElementById('idredirectcustom').style.display = "";
		document.getElementById("txtredirectpage").required = false;
		document.getElementById("idredirectcustom").required = true;
	}
}
function form_redirectchange_tracker2() {
	var baseurl = document.getElementById('baseurl').value;
	var redirect_type = document.getElementById('idtrackerredirecttype2').value;
	if(redirect_type=="page") {
		document.getElementById('txtredirectpage2').style.display = "";
		document.getElementById('idredirectcustom2').style.display = "none";
		document.getElementById("txtredirectpage2").required = true;
		document.getElementById("idredirectcustom2").required = false;
	} else if(redirect_type=="custom") {
		document.getElementById('txtredirectpage2').style.display = "none";
		document.getElementById('idredirectcustom2').style.display = "";
		document.getElementById("txtredirectpage2").required = false;
		document.getElementById("idredirectcustom2").required = true;
	}
}
function create_emailgroup_getcount() {
	var baseurl = document.getElementById('baseurl').value;
	var campaign_projectrefno = document.getElementById('campaign_projectrefno').value;
	var campaign_groupname1 = document.getElementById('campaign_groupname1').value;
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
	      url: baseurl+"ajax/campaignpage/1",
	      data: 
	      { 
	      	campaign_projectrefno: campaign_projectrefno,
	        campaign_groupname1: campaign_groupname1,
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
	var campaign_groupname1 = document.getElementById('campaign_groupname1').value;
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
	      url: baseurl+"ajax/campaignpage/2",
	      data: 
	      { 
	      	campaign_projectrefno: campaign_projectrefno,
	        campaign_groupname1: campaign_groupname1,
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