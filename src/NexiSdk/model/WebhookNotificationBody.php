<?php

namespace NexiSdk\model;

class WebhookNotificationBody implements \JsonSerializable
{
	private ?string $paymentId = null;
	public function getPaymentId()
	{
		return $this->paymentId;
	}
	public function setPaymentId(string $paymentId)
	{
		$this->paymentId = $paymentId;
	}

	private ?string $result = null;
	public function getResult()
	{
		return $this->result;
	}
	public function setResult(string $result)
	{
		$this->result = $result;
	}

	private ?string $paymentMethod = null;
	public function getPaymentMethod()
	{
		return $this->paymentMethod;
	}
	public function setPaymentMethod(string $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}

	private ?string $paymentInstrumentInfo = null;
	public function getPaymentInstrumentInfo()
	{
		return $this->paymentInstrumentInfo;
	}
	public function setPaymentInstrumentInfo(string $paymentInstrumentInfo)
	{
		$this->paymentInstrumentInfo = $paymentInstrumentInfo;
	}

	private ?string $orderAmount = null;
	public function getOrderAmount()
	{
		return $this->orderAmount;
	}
	public function setOrderAmount(string $orderAmount)
	{
		$this->orderAmount = $orderAmount;
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

	private ?string $customerId = null;
	public function getCustomerId()
	{
		return $this->customerId;
	}
	public function setCustomerId(string $customerId)
	{
		$this->customerId = $customerId;
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

	private ?string $customField = null;
	public function getCustomField()
	{
		return $this->customField;
	}
	public function setCustomField(string $customField)
	{
		$this->customField = $customField;
	}

	private ?string $orderTime = null;
	public function getOrderTime()
	{
		return $this->orderTime;
	}
	public function setOrderTime(string $orderTime)
	{
		$this->orderTime = $orderTime;
	}

	private ?Operation $operation = null;
	public function getOperation()
	{
		return $this->operation;
	}
	public function setOperation(Operation $operation)
	{
		$this->operation = $operation;
	}

	private ?string $eventId = null;
	public function getEventId()
	{
		return $this->eventId;
	}
	public function setEventId(string $eventId)
	{
		$this->eventId = $eventId;
	}

	private ?string $eventTime = null;
	public function getEventTime()
	{
		return $this->eventTime;
	}
	public function setEventTime(string $eventTime)
	{
		$this->eventTime = $eventTime;
	}

	private ?string $eventType = null;
	public function getEventType()
	{
		return $this->eventType;
	}
	public function setEventType(string $eventType)
	{
		$this->eventType = $eventType;
	}

	private ?string $securityToken = null;
	public function getSecurityToken()
	{
		return $this->securityToken;
	}
	public function setSecurityToken(string $securityToken)
	{
		$this->securityToken = $securityToken;
	}

	private ?string $errorCode = null;
	public function getErrorCode()
	{
		return $this->errorCode;
	}
	public function setErrorCode(string $errorCode)
	{
		$this->errorCode = $errorCode;
	}

	private ?string $errorMessage = null;
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	public function setErrorMessage(string $errorMessage)
	{
		$this->errorMessage = $errorMessage;
	}

	private ?WebhookNotificationAdditionalData $additionalData = null;
	public function getAdditionalData()
	{
		return $this->additionalData;
	}
	public function setAdditionalData(WebhookNotificationAdditionalData $additionalData)
	{
		$this->additionalData = $additionalData;
	}




	public static function fromJsonDeserializedData($data)
	{
		if ($data instanceof \stdClass) {
			$realdata = get_object_vars($data);
		} else {
			$realdata = $data;
		}

		$returnObject = new WebhookNotificationBody();


		if (array_key_exists("paymentId", $realdata)) {
			$returnObject->setPaymentId($realdata["paymentId"]);
		}

		if (array_key_exists("result", $realdata)) {
			$returnObject->setResult($realdata["result"]);
		}

		if (array_key_exists("paymentMethod", $realdata)) {
			$returnObject->setPaymentMethod($realdata["paymentMethod"]);
		}

		if (array_key_exists("paymentInstrumentInfo", $realdata)) {
			$returnObject->setPaymentInstrumentInfo($realdata["paymentInstrumentInfo"]);
		}

		if (array_key_exists("orderAmount", $realdata)) {
			$returnObject->setOrderAmount($realdata["orderAmount"]);
		}

		if (array_key_exists("currency", $realdata)) {
			$returnObject->setCurrency($realdata["currency"]);
		}

		if (array_key_exists("customerId", $realdata)) {
			$returnObject->setCustomerId($realdata["customerId"]);
		}

		if (array_key_exists("description", $realdata)) {
			$returnObject->setDescription($realdata["description"]);
		}

		if (array_key_exists("customField", $realdata)) {
			$returnObject->setCustomField($realdata["customField"]);
		}

		if (array_key_exists("orderTime", $realdata)) {
			$returnObject->setOrderTime($realdata["orderTime"]);
		}

		if (array_key_exists("operation", $realdata)) {
			$returnObject->setOperation(Operation::fromJsonDeserializedData($realdata["operation"]));
		}

		if (array_key_exists("eventId", $realdata)) {
			$returnObject->setEventId($realdata["eventId"]);
		}

		if (array_key_exists("eventTime", $realdata)) {
			$returnObject->setEventTime($realdata["eventTime"]);
		}

		if (array_key_exists("eventType", $realdata)) {
			$returnObject->setEventType($realdata["eventType"]);
		}

		if (array_key_exists("securityToken", $realdata)) {
			$returnObject->setSecurityToken($realdata["securityToken"]);
		}

		if (array_key_exists("errorCode", $realdata)) {
			$returnObject->setErrorCode($realdata["errorCode"]);
		}

		if (array_key_exists("errorMessage", $realdata)) {
			$returnObject->setErrorMessage($realdata["errorMessage"]);
		}

		if (array_key_exists("additionalData", $realdata)) {
			$returnObject->setAdditionalData(WebhookNotificationAdditionalData::fromJsonDeserializedData($realdata["additionalData"]));
		}

		return $returnObject;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = array();
		if ($this->paymentId !== null) {
			$data["paymentId"] = $this->paymentId;
		}
		if ($this->result !== null) {
			$data["result"] = $this->result;
		}
		if ($this->paymentMethod !== null) {
			$data["paymentMethod"] = $this->paymentMethod;
		}
		if ($this->paymentInstrumentInfo !== null) {
			$data["paymentInstrumentInfo"] = $this->paymentInstrumentInfo;
		}
		if ($this->orderAmount !== null) {
			$data["orderAmount"] = $this->orderAmount;
		}
		if ($this->currency !== null) {
			$data["currency"] = $this->currency;
		}
		if ($this->customerId !== null) {
			$data["customerId"] = $this->customerId;
		}
		if ($this->description !== null) {
			$data["description"] = $this->description;
		}
		if ($this->customField !== null) {
			$data["customField"] = $this->customField;
		}
		if ($this->orderTime !== null) {
			$data["orderTime"] = $this->orderTime;
		}
		if ($this->operation !== null) {
			$data["operation"] = $this->operation;
		}
		if ($this->eventId !== null) {
			$data["eventId"] = $this->eventId;
		}
		if ($this->eventTime !== null) {
			$data["eventTime"] = $this->eventTime;
		}
		if ($this->eventType !== null) {
			$data["eventType"] = $this->eventType;
		}
		if ($this->securityToken !== null) {
			$data["securityToken"] = $this->securityToken;
		}
		if ($this->errorCode !== null) {
			$data["errorCode"] = $this->errorCode;
		}
		if ($this->errorMessage !== null) {
			$data["errorMessage"] = $this->errorMessage;
		}
		if ($this->additionalData !== null) {
			$data["additionalData"] = $this->additionalData;
		}

		return $data;
	}
}
