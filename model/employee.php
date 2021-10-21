<?php

class Employee {
    private $employeeId,
            $firstName,
            $lastName,
            $position,
            $phoneNumber,
            $pay,
            $hourlyWage,
            $paymentType;
    
    
    public function __construct($employeeId, $firstName, $lastName, $position, $phoneNumber, $pay, $hourlyWage, $paymentType ) {
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->phoneNumber = $phoneNumber;
        $this->pay = $pay;
        $this->hourlyWage = $hourlyWage;
        $this->paymentType = $paymentType;        
    }
    
    function getEmployeeId() {
        return $this->employeeId;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getPosition() {
        return $this->position;
    }

    function getPhoneNumber() {
        return $this->phoneNumber;
    }

    function getPay() {
        return $this->pay;
    }

    function getHourlyWage() {
        return $this->hourlyWage;
    }

    function getPaymentType() {
        return $this->paymentType;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    function setPay($pay) {
        $this->pay = $pay;
    }

    function setHourlyWage($hourlyWage) {
        $this->hourlyWage = $hourlyWage;
    }

    function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
    }
    
}
    
    
    