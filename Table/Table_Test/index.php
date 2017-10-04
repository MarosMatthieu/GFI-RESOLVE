<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
  <link rel='stylesheet prefetch' href='http://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>
  <link rel="stylesheet" href="css/style.css">
  

</head>

<body>
  <div class="container">

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar">
	<thead>
	
	
		<tr>
			<th data-field="state" data-sortable="true">Etat</th>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">Title</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">Date</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true">Client</th>
			<th data-field="note" >Opération</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td>Valérie</td>
			<td>01/09/2015</td>
			<td>Français</td>
			<td>12/20</td>
		</tr>
		
	</tbody>
</table>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
<script src='http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
