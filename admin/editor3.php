
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
			$(document).ready(function() {
				$('#example').dataTable( {
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "getData.php"
				} );
			} );
		</script>
	</head>
<body id="index" class="grid_2_3">

			<h1>Live example</h1>
			<div id="dynamic">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                            <thead>
                                    <tr>
                                            <th width="20%">Rendering engine</th>
                                            <th width="25%">Browser</th>
                                            <th width="25%">Platform(s)</th>
                                            <th width="15%">Engine version</th>
                                            <th width="15%">CSS grade</th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                            <td colspan="5" class="dataTables_empty">Loading data from server</td>
                                    </tr>
                            </tbody>
                            <tfoot>
                                    <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                    </tr>
                            </tfoot>
                    </table>
			</div>
			<div class="spacer"></div>	
</body>
</html>