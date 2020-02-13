<?php

namespace GEG\view;
class VueAjouterCreneau
{
	public function render()
	{
		$vGenerale = new VueGenerale();

		$vGenerale->render(
			"<form action=./ajouterCreneau method=post>
			<p>Jour : <input type=number name=Jour min=1 max=7 step=1/></p>
			<p>
				<label for='Semaine'>
					<span>Semaine du cycle :</span>
				</label>
			<select id='Semaine' name='Semaine'>
				<option value='1'>Semaine 1</option>
				<option value='2'>Semaine 2</option>
				<option value='3'>Semaine 3</option>
						<option value='4'>Semaine 4</option>
			  </select>
					</p>
			<label>Cycle</label>
			<input type=number name=cycle min=1>
			<p>Heure de début : <input type=number min=0 max=23 name=HeureD step=3600/></p>
			<p>Heure de fin : <input type=number min=0 max=23 name=HeureF step=3600/></p>
			<p><input type=submit value=OK></p>

			</form>"
		);
	}
}
