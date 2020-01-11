<?php
function biodata($nama, $umur){
	$data = ['name' 		=> $nama,
			 'age'  		=> $umur,
			 'address' 		=> "Panyakalan, Kecamatan Kubung, Kabupaten Solok",
			 'hobbies' 		=> "Ingin Tau",
			 'Is_Merried' 	=> "N",
			 'list_School' 	=> [
			 			'name' 		=> $nama,
			 			'year_in' 	=> "2014",
			 			'year_out' 	=> "2017",
			 			'major' 	=> "Teknik Komputer dan Jaringan"
			 		],
			 'Skill' 		=> [
			 			'Skill_Name'=> "Web Development",
			 			'Level'		=> "Beginner"
			 		],
			 'interest_in_coding' => "Hal yang menarik dalam dunia coding adalah suatu hal yang bahagia ketika sebuah error kita bisa selesaikan berbeda dengan pekerjaan yang lain, di coding hal-hal yang baru lebih cepat untuk di pelajari lagi, dan tidak akan merasa bosan yang akan dikerjakan bukan itu-itu saja. :D" 
			
	 			];
	echo json_encode($data);
	}

$biodata = biodata('Triadmoko Denny Fatrosa', 20);

?>