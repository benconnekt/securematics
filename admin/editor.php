<?php include 'dbc.php' ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- Mirrored from jquery-datatables-editable.googlecode.com/svn/trunk/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 07 Nov 2013 22:44:07 GMT -->
<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<title>DataTables (table plug-in for jQuery) Data Manager Add-on</title>
		
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico">
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
		
		<style type="text/css" media="screen">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "http://www.datatables.net/media/css/site_jui.ccss";
			@import "media/css/demo_table_jui.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
			/*
			 * Override styles needed due to the mix of three different CSS sources! For proper examples
			 * please see the themes example in the 'Examples' section of this site
			 */
			.dataTables_info { padding-top: 0; }
			.dataTables_paginate { padding-top: 0; }
			.css_right { float: right; }
			#example_wrapper .fg-toolbar { font-size: 0.8em }
			#theme_links span { float: left; padding: 2px 10px; }
		</style>

		
		<script type="text/javascript" src="media/js/complete.json"></script>
		<script src="media/js/jquery.min.json" type="text/javascript"></script>
        	<script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="media/js/jquery.dataTables.editable.js"></script>
		<script src="media/js/jquery.jeditable.js" type="text/javascript"></script>
        	<script src="media/js/jquery-ui.js" type="text/javascript"></script>
        	<script src="media/js/jquery.validate.js" type="text/javascript"></script>

		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				var id = -1;//simulation of id
				$('#example').dataTable({
                                    "bProcessing": true,
				    "bServerSide": true,
				    "sAjaxSource": "getData.php",
                                        
                                    bJQueryUI: true,
							"sPaginationType": "full_numbers" }).makeEditable({
                                                         sUpdateURL: function(value, settings)
									{
                             							return(value); //Simulation of server-side response using a callback function
									},
                             			sAddURL: "AddData.php",
                             			sAddHttpMethod: "POST",
                                                sDeleteHttpMethod: "GET",
						sDeleteURL: "DeleteData.php",
                    				"aoColumns": [
                    				{cssclass: "required" },
                    				{},
                    				{
                				indicator: 'Saving platforms...',
                                                tooltip: 'Click to edit platforms',
						type: 'textarea',
                                                submit:'Save changes'},
                    				{
                                                indicator: 'Saving Engine Version...',
                                                tooltip: 'Click to select engine version',
                                                loadtext: 'loading...',
                           			type: 'select',
                               			onblur: 'cancel',
						submit: 'Ok',
                                                loadurl: 'EngineVersionList.php',
						loadtype: 'GET'},
                    				{
                                                indicator: 'Saving CSS Grade...',
                                                tooltip: 'Click to select CSS Grade',
                                                loadtext: 'loading...',
                           			type: 'select',
                               			onblur: 'submit',
                                                data: "{'':'Please select...', 'A':'A','B':'B','C':'C'}"
                                                }
						],
						oAddNewRowButtonOptions: {label: "Add...",
						icons: {primary:'ui-icon-plus'} 
                                                },
						oDeleteRowButtonOptions: {label: "Remove", 
						icons: {primary:'ui-icon-trash'}
									},                               
                                                oAddNewRowFormOptions: { 	
                                                 title: 'Add a new browser',
						 show: "blind",
						 hide: "explode",
                                                 modal: true
									}	,
                                                  sAddDeleteToolbarSelector: ".dataTables_length"								
                                                  });
				
			} );
		</script>
	</head>
<body id="index" class="grid_2_3">
		<div id="fw_container">
						
                    <div id="fw_content">
				<div class="css_clear css_spacing"></div>
				
				<h3>Example</h3>
				<div class="full_width">
<form id="formAddNewRow" action="#" title="Add a new post" style="width:600px;min-width:600px">
        <label for="title">Title</label><br />
	<input type="text" name="title" id="title" class="required" rel="0" />
        <br />
        <label for="description">Description</label><br />
	<input type="text" name="description" id="description" rel="1" />
        <input type="hidden" name="platform" rel="2" />
        <br />
        <label for="image">Image</label><br />
	<input type="text" name="image" id="image" rel="3" />
        <br />
        <label for="category">category</label><br />
	<select name="category" id="version" rel="4">
                <option value="1">Home</option>
                <option value="2">About</option>
                <option value="3">Training</option>
        </select>
        <br />
</form>

    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                            <thead>
                                    <tr>
                                            <th width="20%">#ID</th> 
                                            <th width="20%">Title</th>
                                            <th width="25%">Description</th>
                                            <th width="25%">Image</th>
                                            <th width="15%">Category</th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                            <td colspan="5" class="dataTables_empty">Loading data from server</td>
                                    </tr>
                            </tbody>
                            <tfoot>
                                    <tr>
                                            <th width="20%">#ID</th>
                                            <th width="20%">Title</th>
                                            <th width="25%">Description</th>
                                            <th width="25%">Image</th>
                                            <th width="15%">Category</th>
                                    </tr>
                            </tfoot>
                    </table>
				</div>
			</div>

		</div>

		
	</body>
</html>