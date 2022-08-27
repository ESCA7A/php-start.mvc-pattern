<?php

namespace Engine\Models\ApiDataBuilder;

interface CustomersInterface
{
    public function setId($id);
    public function getId();
    public function setFirstname();
    public function getFirstname();
    public function setUsername();
    public function getUsername();
    public function setLastname();
    public function getLastname();
    public function setAddress();
    public function getAddress();
}