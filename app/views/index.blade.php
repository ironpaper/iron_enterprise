@extends('templates.master')

@section('content')
	
	<div class="row">
		<div class="col-xs-12">
			<!-- <div id="chart_div"></div> -->
		</div>
	</div>

	<div class="row">
		
		<div class="col-xs-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>Traffic</center></div>
			  <div class="panel-body">
			    <center><h2>876</h2></center>
			  </div>
			</div>					
		</div>
		<div class="col-xs-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>Leads</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $leads }}</h2></center>
			  </div>
			</div>					
		</div>
		<div class="col-xs-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>MQL</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $mql }}</h2></center>
			  </div>
			</div>					
		</div>
		<div class="col-xs-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>SQL</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $sql }}</h2></center>
			  </div>
			</div>					
		</div>	

	</div>    
@stop