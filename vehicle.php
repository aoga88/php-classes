<?php

class Vehicle {
    private $color;
    private $width;
    private $height;

    public function setColor($color) {
	$this->color = $color;
    }

    public function setWidth($width) {
	$this->width = $width;
    }

    public function setHeight($height) {
	$this->height = $height;
    }

    public function getColor() {
	return $this->color;
    }

    public function getWidth() {
	return $this->width;
    }

    public function getHeight() {
	return $this->height;
    }
}
