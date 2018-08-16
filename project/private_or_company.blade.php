@extends('layouts.master')
@section('title', '- Investera som')
@section('content')
	<div class="gra1">
		<div class="container cfs">
			<div class="row otut ">
				<div class="col-12 text-center nopad">
					<div class="headline7 mb38">Jag investerar som</div>
					<div class="text-center">
						<div>
							<form method="POST" action="/invest">
								{{ csrf_field() }}
								<input type="hidden" name="issue_id" value="{{$issue_id}}" readonly>
								<input type="hidden" name="company" value="0" readonly>
								<button  type="submit" class="white-btn am14b mb24" onclick="this.disabled=true;this.form.submit();">PRIVATPERSON</button>
							</form>
						</div>
						<div>
							<form method="POST" action="/invest">
								{{ csrf_field() }}
								<input type="hidden" name="issue_id" value="{{$issue_id}}" readonly>
								<input type="hidden" name="company" value="1" readonly>
								<button type="submit" class="white-btn am14b mb120" onclick="this.disabled=true;this.form.submit();">FÖRETAG</button>
							</form>
							
						</div>
					</div>
					@include ('invest._stages')
				</div>
			</div>
		</div>
	</div>
	

@endsection