<!DOCTYPE html>
<html>
<body>
<div style="background: #F2EBEB;height:1050px;">
	<div><a href="" style="height: 56px; background: url({{URL('/images/logo.svg')}}) no-repeat center center; min-width: 295px; display: block;"></a></div>
	<div style="display: flex; justify-content: center; margin-left: 50px; margin-right:50px;height:1000px;">
		<div style="background: #fff;width: 60%;min-width: 200px;padding: 20%;padding-top: 40px;box-shadow: 0 2px 6px 0 rgba(0,0,0,0.22);margin-bottom:50px;">
			<h1 style="text-align: center;font-size: 24px;font-family: 'brew-bold';">Välkommen som medlem i Pepins!</h1>

			<div><hr style="border-bottom: solid 2px #000;border-top: 0;margin-top: 0;margin-bottom: 30px;"></div>

			<div style="display: flex;justify-content: center;margin-bottom: 45px;">
				<div style="font-family: 'apercu-regular';font-size: 14px;text-align: center;width: 100%;color: #666;">Som medlem kan du investera i spännande tillväxtbolag, ta del av nyheter och uppdateringar i Stakeholders' Club och handla aktier på Pepins Market. För att göra inlägg i Pepins Stakeholders´ Club behöver du bekräfta din email. Du bekräftar din mail genom att följa någon av länkarna nedan.</div>
			</div>

			<div style="display: flex;justify-content: center;margin-bottom: 5px;">
				<h1 style="font-family: 'brew-bold';font-size: 14px;text-align: center;width: 100%;">Invest</h1>
			</div>
			<div style="display: flex;justify-content: center;margin-bottom: 30px;">
				<div style="font-family: 'apercu-regular';font-size: 14px;text-align: center;width: 100%;color: #666;">Här kan du investera i spännande tillväxtbolag. Använd din ekonomiska rösträtt och bli delägare i ideér du tror på och bolag du gillar.</div>
			</div>
			<div style="text-align: center;">
				<a href="{{URL('/register/confirm?token=' . $user->confirmation_token . '&url=/companies/open')}}"><button style="border: 3px solid #000;background: none;text-align: center;cursor: pointer;height: 44px;text-transform: uppercase;margin-bottom: 45px;width: 220px;font-size: 14px;font-family: 'apercu-bold';letter-spacing: 1px;">Till Invest</button></a>
			</div>

			<div style="display: flex;justify-content: center;margin-bottom: 5px;">
				<h1 style="font-family: 'brew-bold';font-size: 14px;text-align: center;width: 100%;">Stakeholders' Club</h1>
			</div>
			<div style="display: flex;justify-content: center;margin-bottom: 30px;">
				<div style="font-family: 'apercu-regular';font-size: 14px;text-align: center;width: 100%;color: #666;">I detta forum spirar delägarkraften! Här kan du ta del av bolagsinformation och rapporter samtidigt som du kan bidra till din investerings framgång.</div>
			</div>
			<div style="text-align: center;">
				<a href="{{URL('/register/confirm?token=' . $user->confirmation_token . '&url=/shc')}}"><button style="border: 3px solid #000;background: none;text-align: center;cursor: pointer;height: 44px;text-transform: uppercase;margin-bottom: 45px;width: 220px;font-size: 14px;font-family: 'apercu-bold';letter-spacing: 1px;">Till SHC</button></a>
			</div>

			<div style="display: flex;justify-content: center;margin-bottom: 5px;">
				<h1 style="font-family: 'brew-bold';font-size: 14px;text-align: center;width: 100%;">Market</h1>
			</div>
			<div style="display: flex;justify-content: center;margin-bottom: 30px;">
				<div style="font-family: 'apercu-regular';font-size: 14px;text-align: center;width: 100%;color: #666;">Pepins Market är världens första marknads­platsför crowd­fundade bolag. Som medlem i Pepins har du tillgång till och kan köpa och sälja aktier på vår marknads­plats.</div>
			</div>
			<div style="text-align: center;">
				<a href="{{URL('/register/confirm?token=' . $user->confirmation_token . '&url=/market/listing')}}"><button style="border: 3px solid #000;background: none;text-align: center;cursor: pointer;height: 44px;text-transform: uppercase;margin-bottom: 45px;width: 220px;font-size: 14px;font-family: 'apercu-bold';letter-spacing: 1px;">Till Market</button></a>
			</div>
		</div>
	</div>
	<div style="font-family: 'apercu-regular';font-size: 11px;text-align: center;margin-top: 30px;color: #999;">© {{ config('app.name') }}</div>
	
	
</div>

</body>
</html>