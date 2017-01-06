<?php
/*
 * Interface for Automobiles. Classes implementing this interface must have to implement all methods.
 */

interface iAutomobile
{
	public function drive($make, $model);
	public function horn();
	public function getMake();
	public function getModel();
}