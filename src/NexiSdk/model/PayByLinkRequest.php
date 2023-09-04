<?php

namespace NexiSdk\model;

class PayByLinkRequest implements \JsonSerializable
{
	private ?Order $order = null;
	public function getOrder()
	{
		return $this->order;
	}
	public function setOrder(Order $order)
	{
		$this->order = $order;
	}

	private ?PaymentSession $paymentSession = null;
	public function getPaymentSession()
	{
		return $this->paymentSession;
	}
	public function setPaymentSession(PaymentSession $paymentSession)
	{
		$this->paymentSession = $paymentSession;
	}

	private ?string $expirationDate = null;
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate(string $expirationDate)
	{
		$this->expirationDate = $expirationDate;
	}




	public static function fromJsonDeserializedData($data)
	{
		if ($data instanceof \stdClass) {
			$realdata = get_object_vars($data);
		} else {
			$realdata = $data;
		}

		$returnObject = new PayByLinkRequest();


		if (array_key_exists("order", $realdata)) {
			$returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
		}

		if (array_key_exists("paymentSession", $realdata)) {
			$returnObject->setPaymentSession(PaymentSession::fromJsonDeserializedData($realdata["paymentSession"]));
		}

		if (array_key_exists("expirationDate", $realdata)) {
			$returnObject->setExpirationDate($realdata["expirationDate"]);
		}

		return $returnObject;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = array();
		if ($this->order !== null) {
			$data["order"] = $this->order;
		}
		if ($this->paymentSession !== null) {
			$data["paymentSession"] = $this->paymentSession;
		}
		if ($this->expirationDate !== null) {
			$data["expirationDate"] = $this->expirationDate;
		}

		return $data;
	}
}
