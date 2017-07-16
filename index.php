<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="author" content="Marty Bonacci">
			<meta name="description" content="car class lesson">
			<title>car class lesson</title>
		</head>
		<body>
			<?php
				class Car {
					private $model;
					private $cylinders;

					public function getCylinders() {
						return($this->cylinders);
					}
					public function getModel() {
						return($this->model);
					}

					public function setCylinders ($newCylinders) {
						if($newCylinders <= 0 || $newCylinders % 2 != 0) {
							throw(new Exception('Cylinders must be even, except for the Audi RS2, Yugo...'));
						}
						$this->cylinders = $newCylinders;
					}

					public function setModel($newModel) {
						$this->model = $newModel;
					}

					public function __construct($newModel, $newCylinders){
						$this->setModel($newModel);
						$this->setCylinders($newCylinders);
					}
				}
				$honda = new Car("Honda",6);
				$honda->setCylinders(8);
				echo $honda->getCylinders()."<br />";
				echo $honda->getModel()."<br />";

			?>
		</body>
	</html>