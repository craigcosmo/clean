<h5 class="headline5 mb30">Ditt mitt mobilnummer måste vara i formatet 4671234768 för att kunna använda Swish. Uppdatera ditt mobilnummer</h5> 
<div class="col-12">
	<form method="POST" action="{{$url}}">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-md-4 col-12"></div>
            <div class="col-md-4 col-12">
                <input type="hidden" name="id" value="{{$id}}" readonly>
                <input type="hidden" name="gift_card_id" value="{{$gift_card_id}}" readonly>
                <input type="hidden" name="company" value="{{$company}}" readonly>
                <input type="hidden" name="shares" value="{{$shares}}" readonly>
                <input class="reg-input" type="number" name="mobile" id="mobile" placeholder="MOBILNUMMER" required>
                <br>
                <button type="submit" class="reg-btn butcopy1 mb22">SWISHA</button>
            </div>
            <div class="col-md-4 col-12"></div>
        </div>
    </form>
</div>