<?php

namespace GEG\view;

echo
	"<form action=../index.php/ajouterCreneau method=post>
	<p>Jour : <input type=text name=Jour /></p>
	<p>Date : <input type=date name=Date/></p>
	<p>Heure de début : <input type=time name=HeureD step=3600/></p>
	<p>Heure de fin : <input type=time name=HeureF step=3600/></p>
	<p><input type=submit value=OK></p>

	</form>";
