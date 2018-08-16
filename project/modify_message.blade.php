@if ($transaction->side == 1)
    <h5 class="headline5 mb30">Ändra köporder</h5>
@else
    <h5 class="headline5 mb30">Ändra säljorder</h5>
@endif 
<div class="col-12">
	<form method="POST" action="/market/modify_order/{{$transaction->id}}">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-md-2 col-12"></div>
            <div class="col-md-8 col-12">
                @if (strlen($message) > 0)
                    <div class="butcopy1 mb30">{{$message}}</div>
                @endif 
                @if ($depth->flags==5)
                    <div class="butcopy1 mb30">Kurs fastställd. Du kan öka volymen.</div>
                @else
                    @if ($transaction->side == 1)
                        <div class="butcopy1 mb30">Du kan öka priset och öka volymen.</div>
                    @else
                        <div class="butcopy1 mb30">Du kan minska priset och öka volymen.</div>
                    @endif
                @endif
                <input type="hidden" name="id" value="{{$transaction->id}}" readonly>
                <div class="butcopy1">Pris</div>
                @if ($depth->flags==5)
                    <input class="reg-input gray" type="text" name="price" id="price" value="{{$transaction->price}}" readonly>
                @else
                    <input class="reg-input" type="text" name="price" id="price" value="{{$transaction->price}}" required>
                @endif

                <div class="butcopy1">Volym</div>
                <input class="reg-input" type="text" name="volume" id="volume" value="{{abs($transaction->volume)}}" required>
                <br>
                <button type="submit" class="reg-btn butcopy1 mb22">ÄNDRA</button>
            </div>
            <div class="col-md-2 col-12"></div>
        </div>
    </form>
</div>