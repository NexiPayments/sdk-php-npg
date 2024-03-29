<?php

namespace NexiSdk\model;

class RefundRequest implements \JsonSerializable
{
	private ?int $amount = null;
	public function getAmount()
	{
		return $this->amount;
	}
	public function setAmount(int $amount)
	{
		$this->amount = $amount;
	}

	private ?string $currency = null;
	public function getCurrency()
	{
		return $this->currency;
	}
	public function setCurrency(string $currency)
	{
		$this->currency = $currency;
	}

	private ?string $description = null;
	public function getDescription()
	{
		return $this->description;
	}
	public function setDescription(string $description)
	{
		$this->description = $description;
	}




	public static function fromJsonDeserializedData($data)
	{
		if ($data instanceof \stdClass) {
			$realdata = get_object_vars($data);
		} else {
			$realdata = $data;
		}

		$returnObject = new RefundRequest();


		if (array_key_exists("amount", $realdata)) {
			$returnObject->setAmount($realdata["amount"]);
		}

		if (array_key_exists("currency", $realdata)) {
			$returnObject->setCurrency($realdata["currency"]);
		}

		if (array_key_exists("description", $realdata)) {
			$returnObject->setDescription($realdata["description"]);
		}

		return $returnObject;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = array();
		if ($this->amount !== null) {
			$data["amount"] = $this->amount;
		}
		if ($this->currency !== null) {
			$data["currency"] = $this->currency;
		}
		if ($this->description !== null) {
			$data["description"] = $this->description;
		}

		return $data;
	}
}
