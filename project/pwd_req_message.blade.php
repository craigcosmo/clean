<h5 class="headline5 mb30"> {{$message}} </h5> 
<div class="col-12">
	<form method="POST" action="{{$url}}">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-md-4 col-12"></div>
            <div class="col-md-4 col-12">
                <input type="hidden" name="issue_id" value="{{$issue_id}}" readonly>
                <input class="reg-input" type="password" name="password" id="password33" placeholder="LÖSENORD" required>
                <br>
                <button type="submit" class="reg-btn butcopy1 mb22">SKICKA</button>
            </div>
            <div class="col-md-4 col-12"></div>
        </div>
    </form>
</div>