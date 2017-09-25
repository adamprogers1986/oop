<?php

namespace Src\Model;
use DataClean\Address;

class Csv{
    
    protected $fileName;
    protected $fileType;
    protected $fileSize;
    protected $row; 
    protected $temp; 
   
    
    public function getId() {
        return $this->id;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getFileType() {
        return $this->fileType;
    }

    public function getFileSize() {
        return $this->fileSize;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
        return $this;
    }

    public function setFileType($fileType) {
        $this->fileType = $fileType;
        return $this;
    }
    public function setTemp($temp){
        $this->temp = $temp;
        return $this;
    }
    public function getTemp() {
        return $this->temp;
    }

    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;
        return $this;
    }
    
    public function getRow() {
        return $this->row;
    }

    public function setRow($row) {
        $this->row = $row;
        return $this;
    }

    public function setAddressRow() {
        $address = new Address();
        $this->row[$address->getId] = array("address1"=>$address->getAddress1(), "address2"=>$address->getAddress2(), "address3"=>$address->getAddress3(), "town"=>$address->getTown(), "city"=>$address->getCity(), "postcode"=>$address->getPostCode());
        return $this->row;
    }

    public function getAddressRows() {
        return $this->row;
    }

    public function getSingleAddressRow($id){
        return $this->row[$id];
    }
   




}
