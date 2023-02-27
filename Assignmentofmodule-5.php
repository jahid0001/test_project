<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Assignment of module-5 HTML Basic OOP and Superglobal Variables in PHP</title>
		
		<style>

		.container-us100{
			
			justify-content: center;
			display: flex;
				
		}

		.column-1{
			margin-top: 34px;
			float: left;
			background: #fff;
			padding: 64px;
			margin-left: 30px;
			border-radius: 10px;

		}
		
		.box{

			border-radius: 20px;
			padding: 17px 20px 17px 10px;
			box-sizing: inherit;
			border: 1px solid transparent;
			width: 275px;
			color: blue;
			background: rgba(0, 0, 0, 0.05);
		}

		.btn{

			padding: 0px 20px;
			min-width: 85px;
			height: 38px;
			background-color: 	#454B1B;
			border-radius: 25px;
			font-family: SourceSansPro-SemiBold;
			font-size: 14px;
			color: #fff;
			line-height: 1.2;
			text-transform: uppercase;
		}

		.label1{

			text-transform: uppercase;
			justify-content: center;
			display: flex;
		}

		</style>
	</head>
	<body style="background-color: #808080;">


		<div class="container-us100">
				
			<div class="column-1">

					<!-- Task 1: HTML Basics -->

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<h3 class="label1">Input Your Name & Email</h3> <br>
					<input type="text" id="name" name="name" required class="box" placeholder=" your name"><br><br>					
					<input type="email" id="email" name="email" required class="box" placeholder="your email"><br><br>
					<input type="submit" value="Submit" class="btn">
				</form>

					<!-- Task 2: Basic OOP in PHP -->

						<h3>Basic OOP in PHP</h3>
						
					<?php
						class Person {
							private $name;
							private $email;

							public function setName($name) {
								$this->name = $name;
							}

							public function setEmail($email) {
								$this->email = $email;
							}

							public function getName() {
								return $this->name;
							}

							public function getEmail() {
								return $this->email;
							}
						}

						$person = new Person();
						$person->setName("John Doe");
						$person->setEmail("johndoe@example.com");

						echo "Name: " . $person->getName() . "<br>";
						echo "Email: " . $person->getEmail();
					?>

					<!-- Task 3: Superglobal Variables in PHP -->

						<h3>Superglobal Variables in PHP</h3>

						<?php
							

							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$name = $_POST['name'];
								$email = $_POST['email'];

								$persons = new Person();
								$persons->setName($name);
								$persons->setEmail($email);

								echo "Name: " . $persons->getName() . "<br>";
								echo "Email: " . $persons->getEmail();
								
							}
						?>

			</div>
			
		</div>

	</body>
</html>
