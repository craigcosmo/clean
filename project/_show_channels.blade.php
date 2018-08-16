<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SHC CHANNELS I DATABASEN (<a href="/backoffice/add/channel">LÄGG TILL CHANNEL</a>)
				</div>
			</div>
		</div>
	</div>
<div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">

				{{ csrf_field() }}
				<table class="table kap table-sm table-striped molo">
					<thead>
						<tr>
						    <th class="a13b text-left">Id</th>
						    <th class="a13b text-left">Namn</th>
						    <th class="a13b text-left">Slug</th>
						    <th class="a13b text-left">Mail</th>
						    <th class="a13b text-left">show_only_shareholders</th>
						    <th class="a13b text-left">only_shareholder_threads</th>
						    <th class="a13b text-left">no_comments</th>
						    <th class="a13b text-left">Redigera</th>
						    <th class="a13b text-left">Ta bort</th>
						</tr>
					</thead>
					@foreach ($channels as $channel)
						<tr>
							<td class="a14m text-left">{{$channel->id}}</td>
							<td class="a14m text-left">{{$channel->name}}</td>
							<td class="a14m text-left">{{$channel->slug}}</td>
							<td class="a14m text-left">{{$channel->mail}}</td>
							<td class="a14m text-left">{{$channel->show_only_shareholders}}</td>
							<td class="a14m text-left">{{$channel->only_shareholder_threads}}</td>
							<td class="a14m text-left">{{$channel->no_comments}}</td>
							<td class="a14m text-left"><a href="/backoffice/get/channel/{{$channel->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/delete/channel/{{$channel->id}}">Ta bort</a></td>
						</tr>
					@endforeach
				</table>
		</div>
	</div>
</div>