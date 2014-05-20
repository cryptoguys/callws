<?php namespace Cryptoguys\Callws;

class Callws {
 
	public function __construct()
	{

	}


	 public function callget() {
	 	return "test Get";



	 }
	 public function callpost() {
		return "test Post";


	 }
	 public  function test($key, $value = null) {

			@$json = file_get_contents($value);
			if(!$json){
				throw new \BadMethodCallException("withJson can't access to url..");
			}
			else {
				if (is_array($key))
				{
					$this->data = array_merge(json_decode($json), $key);
				}
				else
				{
					$this->data[$key] = json_decode($json);
					if ($this->data[$key]=='') {
						throw new \BadMethodCallException("withJson: JSON Format is invalid or not UTF8.");
					}
				}
			

			return $this;
			}


	 }

}