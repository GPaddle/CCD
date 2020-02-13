<?php

namespace GEG\view;
class VueAjouterCreneau
{
	public function render()
	{
		$vGenerale = new VueGenerale();

		$vGenerale->render(
			"<form action=/ajouterCreneau method=post>
			<p>Jour : <input type=number name=Jour min=1 max=7 step=1/></p>
			<p>
				<label for='Semaine'>
					<span>Type de carte :</span>
				</label>
			<select id='Semaine' name='Semaine'>
				<option value='A'>Semaine 1</option>
				<option value='B'>Semaine 2</option>
				<option value='C'>Semaine 3</option>
						<option value='D'>Semaine 4</option>
			  </select>
					</p>
			<p>Heure de début : <input type=time name=HeureD step=3600/></p>
			<p>Heure de fin : <input type=time name=HeureF step=3600/></p>
			<p><input type=submit value=OK></p>
	
			</form>"
		);
	}
}
