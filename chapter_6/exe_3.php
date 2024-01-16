<?php
    $ceu=array("Italy"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki","France"=>"Paris","Slovakia"=>"Bratislava","Slovenia"=>"Ljubjana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin","Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm","United Kingdom"=>"London","Cyprus"=>"Nicosia","Lithuania"=>"Vilius","Czech Republic"=>"Prague","Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna","Poland"=>"Warsaw");

    asort($ceu);

    foreach($ceu as $country=>$capital){
        echo "The Capital of $country is $capital <br>";
    }