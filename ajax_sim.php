<?php

//simulated server for ajax lookup

// sleep(1); //simulate load time

//build data array
$data = [
	"last_page"=>100,
	"data"=>[
		["age"=>1],
		["age"=>2],
		["age"=>3],
		["age"=>4],
		["age"=>5],
		["age"=>6],
		["age"=>7],
		["age"=>8],
		["age"=>9],
		["age"=>10],
		["age"=>11],
		["age"=>12],
		["age"=>13],
		["age"=>14],
		["age"=>15],
		["age"=>16],
		["age"=>17],
		["age"=>18],
		["age"=>19],
		["age"=>20],
		["age"=>21],
		["age"=>22],
		["age"=>23],
		["age"=>24],
		["age"=>25],
	]
];

//return JSON formatted data
echo(json_encode($data));



