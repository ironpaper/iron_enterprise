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
			  <div class="panel-heading"><center><h2>Traffic</h2></center></div>
			  <div class="panel-body">
			    <center><h2>{{ $traffic }}</h2></center>
			  </div>
			</div>					
		</div>
		<div class="col-xs-12 col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center><h4>Leads</h4></center></div>
			  <div class="panel-body">
			    <center><h2>{{ $leads }}</h2>
			    <p class="dimmned">A lead is a contact that expresses interest in your brand or off er andprovides enough basic informationto begin a validation process</p>
			  </div></center>
			</div>					
		</div>

		<div class="col-xs-1 percentage-column">
			<center><p class="badge badge-special">{{ $lTom_rate }}</p></center>
		</div>

		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading"><center><h4>MQL</h4></center></div>
			  <div class="panel-body">
			    <center><h2>{{ $mql }}</h2>
			    <p class="dimmned">An MQL is a transition stater epresenting either increased validation or a deeper expression of interest. An MQL is a lead that provides some crucial validation allowing for a future salesoppor tunity.</p>
			  </div></center>
			</div>					
		</div>

		<div class="col-xs-1 percentage-column">
			<center><p class="badge badge-special">{{ $mTos_rate }}</p></center>
		</div>		

		<div class="col-xs-12 col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading"><center><h4>SQL</h4></center></div>
			  <div class="panel-body">
			    <center><h2>{{ $sql }}</h2>
			    <p class="dimmned">An SQL is a validated lead that has also expressed interest in a proposal or deal exploration.</p></center>
			  </div>
			</div>					
		</div>	

	</div>    
@stop