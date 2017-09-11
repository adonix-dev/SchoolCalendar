<?php

class ScheduleInit{

	public $xml;
	public $groupe;

	/**
	 * [__construct]
	 * @param [url] $XMLsource [source XML]
	 */
	public function __construct($url){

		if($url){

			header("Content-Type: text/x-vCalendar; charset=utf-8");
			header('Content-Disposition: attachment; filename=UT3-UPS-L2-INFO-EDT.ics');

			$source = htmlspecialchars($url);

			if(!empty($_GET['grp'])){
				$this->groupe = htmlspecialchars($_GET['grp']);
			}
			else{
				die('Aucun groupe n\'a été precisé');
			}

		}
		else{
			die('Aucun emplois du temps n\'a été precisé');
		}

		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, $source);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$this->xml = new simpleXMLElement(curl_exec($curl));

	}

}

?>