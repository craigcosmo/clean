@extends('layouts.master')
@section('title', '- Backoffice')
@section('content')

 <div class="gra1 maxh">
	<div class="container cfs tyi">
		<div class="row">
            <div class="col-12 nopad">
                <a href="/backoffice"><div class="vanso a18b60 text-center">
                    Backoffice
                </div></a>
            </div>
        </div>
    </div>
				
	@include('backoffice._user_search')
    <div class="container cfs mb40">
        <div class="row">
            <div class="col-12 nopad">
			    <table class="table kap table-sm table-striped molo mb40">
			    	<thead>
			    		<tr>
                			<th class="a13b text-left">Id</th>
                			<th class="a13b text-left">Förnamn</th>
                			<th class="a13b text-left">Efternamn</th>
                			<th class="a13b text-left">Email</th>
                			<th class="a13b text-left">Personnummer</th>
                			<th class="a13b text-left">Postkod</th>
                			<th class="a13b text-left">Postort</th>
                			<th class="a13b text-left">Adress</th>
                            <th class="a13b text-left">Verifierat</th>
                            <th class="a13b text-left">Verfications metod</th>
                			<th class="a13b text-left">Företag</th>
                			<th class="a13b text-left">Orgnr</th>
                            <th class="a13b text-left">Företag verifierat</th>
                            <th class="a13b text-left">SHC förbjuden</th>
                            <th class="a13b text-left">Kundkategori</th>
                            <th class="a13b text-left">Kundkategori bolag</th>
                			<th class="a13b text-left"></th>
                			<th class="a13b text-left"></th>
                            <th class="a13b text-left"></th>
            			</tr>
            		</thead>
            		@foreach ($users as $user)

            		<form method="post" action="/backoffice/update/user/{{$user->id}}" id="update_user_form{{$user->id}}">
                        <input type="hidden" form="update_user_form{{$user->id}}" name="_token" value="{{ csrf_token() }}">
                    </form>
            		<tr>
            				<td class="a14m text-left">
                                <a class="black-frame am14b" href="/backoffice/show/user/{{$user->id}}">{{$user->id}}</a>
                                <input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="hidden" name="id" value="{{$user->id}}">
                            </td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="firstname" value="{{$user->firstname}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="lastname" value="{{$user->lastname}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="email" value="{{$user->email}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="nationalid" value="{{$user->verification_national_id}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="zipcode" value="{{$user->zipcode}}" size="8">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="postarea" value="{{$user->postarea}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" type="text" name="address" value="{{$user->address}}">
            				</td>
                            <td class="a14m text-left">
                                <input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="verified" value="{{$user->verified}}">
                            </td>
                            <td class="a14m text-left">
                                <input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="verification_method" value="{{$user->verification_method}}">
                            </td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="companyname" value="{{$user->company_name}}">
            				</td>
            				<td class="a14m text-left">
            					<input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="companyorgnr" value="{{$user->company_org_nbr}}">
            				</td>
                            <td class="a14m text-left">
                                <input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="company_verified" value="{{$user->company_verified}}">
                            </td>
                            <td class="a14m text-left">
                                <input form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="shc_banned" value="{{$user->shc_banned}}">
                            </td>
                            <td class="a14m text-left">
                                <select form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="user_category">
                                    <option value="Icke-professionell kund" {{($user->user_category == 'Icke-professionell kund' ? 'selected' : '')}}>Icke-professionell kund</option>
                                    <option value="Jämbördig motpart" {{($user->user_category == 'Jämbördig motpart' ? 'selected' : '')}}>Jämbördig motpart</option>
                                    <option value="Professionell kund" {{($user->user_category == 'Professionell kund' ? 'selected' : '')}}>Professionell kund</option>
                                </select>
                            </td>
                            <td class="a14m text-left">
                                <select form="update_user_form{{$user->id}}" class="reg-input-bo no-yellow" name="company_category">
                                    <option value="Icke-professionell kund" {{($user->company_category == 'Icke-professionell kund' ? 'selected' : '')}}>Icke-professionell kund</option>
                                    <option value="Jämbördig motpart" {{($user->company_category == 'Jämbördig motpart' ? 'selected' : '')}}>Jämbördig motpart</option>
                                    <option value="Professionell kund" {{($user->company_category == 'Professionell kund' ? 'selected' : '')}}>Professionell kund</option>
                                </select>
                            </td>

            				<td class="a14m text-left">
                                <button form="update_user_form{{$user->id}}" class=" black-frame am14b" type="submit">UPD</button>
            				</td>
                			<td class="a14m text-left">
                				<form style="margin:0" action="/backoffice/login/user/{{$user->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="black-frame am14b" type="submit">LI</button>
                					<input type="hidden" name="login" value="1">
                				</form>
                			</td>
                            <td class="a14m text-left">
                                <form style="margin:0" action="/backoffice/send_confirm_mail/user/{{$user->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="black-frame am14b" type="submit">SCE</button>
                                    <input type="hidden" name="login" value="1">
                                </form>
                            </td>
            		</tr>
            		@endforeach
            	</table>
			</div>
		</div>
	</div>
</div>


@endsection