@extends('templates.master')

@section('content')
	
	<div class="row">
		<div class="col-xs-12">
			<!-- <div id="chart_div"></div> -->
		</div>
	</div>

	<div class="row">
		
		<div class="col-xs-12">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>Traffic</center></div>
			  <div class="panel-body">
			    <center><h2>876</h2></center>
			  </div>
			</div>					
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>Leads</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $leads }}</h2>
			    <p class="dimmned">A lead is a contact that expresses interest in your brand or off er andprovides enough basic informationto begin a validation process</p>
			  </div></center>
			</div>					
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>MQL</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $mql }}</h2>
			    <p class="dimmned">An MQL is a transition staterepresenting either increasedvalidation or a deeper expressionof interest.An MQL is a lead thatprovides some crucial validationallowing for a future salesopportunity.</p>
			  </div></center>
			</div>					
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
			  <div class="panel-heading"><center>SQL</center></div>
			  <div class="panel-body">
			    <center><h2>{{ $sql }}</h2>
			    <p class="dimmned">An SQL is a validated lead that has also expressed interest in a proposal or deal exploration.</p></center>
			  </div>
			</div>					
		</div>	

	</div>    
@stop