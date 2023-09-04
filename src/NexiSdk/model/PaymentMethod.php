<?php

namespace NexiSdk\model;

class PaymentMethod implements \JsonSerializable
{
	private ?string $circuit = null;
	public function getCircuit()
	{
		return $this->circuit;
	}
	public function setCircuit(string $circuit)
	{
		$this->circuit = $circuit;
	}

	private ?PaymentMethodType $paymentMethodType = null;
	public function getPaymentMethodType()
	{
		return $this->paymentMethodType;
	}
	public function setPaymentMethodType(PaymentMethodType $paymentMethodType)
	{
		$this->paymentMethodType = $paymentMethodType;
	}

	private ?string $imageLink = null;
	public function getImageLink()
	{
		return $this->imageLink;
	}
	public function setImageLink(string $imageLink)
	{
		$this->imageLink = $imageLink;
	}

	private ?bool $recurringSupported = null;
	public function getRecurringSupported()
	{
		return $this->recurringSupported;
	}
	public function setRecurringSupported(bool $recurringSupported)
	{
		$this->recurringSupported = $recurringSupported;
	}

	private ?bool $oneClickSupported = null;
	public function getOneClickSupported()
	{
		return $this->oneClickSupported;
	}
	public function setOneClickSupported(bool $oneClickSupported)
	{
		$this->oneClickSupported = $oneClickSupported;
	}




	public static function fromJsonDeserializedData($data)
	{
		if ($data instanceof \stdClass) {
			$realdata = get_object_vars($data);
		} else {
			$realdata = $data;
		}

		$returnObject = new PaymentMethod();


		if (array_key_exists("circuit", $realdata)) {
			$returnObject->setCircuit($realdata["circuit"]);
		}

		if (array_key_exists("paymentMethodType", $realdata)) {
			$returnObject->setPaymentMethodType(PaymentMethodType::fromJsonDeserializedData($realdata["paymentMethodType"]));
		}

		if (array_key_exists("imageLink", $realdata)) {
			$returnObject->setImageLink($realdata["imageLink"]);
		}

		if (array_key_exists("recurringSupported", $realdata)) {
			$returnObject->setRecurringSupported($realdata["recurringSupported"]);
		}

		if (array_key_exists("oneClickSupported", $realdata)) {
			$returnObject->setOneClickSupported($realdata["oneClickSupported"]);
		}

		return $returnObject;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = array();
		if ($this->circuit !== null) {
			$data["circuit"] = $this->circuit;
		}
		if ($this->paymentMethodType !== null) {
			$data["paymentMethodType"] = $this->paymentMethodType;
		}
		if ($this->imageLink !== null) {
			$data["imageLink"] = $this->imageLink;
		}
		if ($this->recurringSupported !== null) {
			$data["recurringSupported"] = $this->recurringSupported;
		}
		if ($this->oneClickSupported !== null) {
			$data["oneClickSupported"] = $this->oneClickSupported;
		}

		return $data;
	}
}
