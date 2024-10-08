<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>

<?php
//03. Fetching all customers
//$query = $pdo->query("SELECT * FROM Customers");
//$customers = $query->fetchAll(PDO::FETCH_ASSOC);

//echo "<pre>";
//print_r($customers);
//echo "</pre>";

//04. Fetching a single customer record
//$query = $pdo->query("SELECT * FROM Customers WHERE CustomerID = 1");
//$customer = $query->fetch(PDO::FETCH_ASSOC);

//echo "<pre>";
//print_r($customer);
//echo "</pre>";

//05. Inserting a new customer
//$newCustomer = [
    //'CustomerID' => 6,
    //'Name' => 'John Doe',
    //'Email' => 'johndoe@example.com',
    //'PhoneNumber' => '1234567890',
    //'MembershipDate' => '2024-10-08'
//];

//$sql = "INSERT INTO Customers (CustomerID, Name, Email, PhoneNumber, MembershipDate) VALUES (:CustomerID, :Name, :Email, :PhoneNumber, :MembershipDate)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute($newCustomer);

//06. Deleting a customer with CustomerID = 6
//$sql = "DELETE FROM Customers WHERE CustomerID = :CustomerID";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['CustomerID' => 6]);

//07 Updating a customer's phone number
//$sql = "UPDATE Customers SET PhoneNumber = :PhoneNumber WHERE CustomerID = :CustomerID";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([
    'PhoneNumber' => '0987654321',
    'CustomerID' => 1
//]);


//08. Inserting a new customer
//$newCustomer = [
    //'CustomerID' => 7,
    //'Name' => 'Marc Andrie',
    //'Email' => 'pabello@example.com',
    //'PhoneNumber' => '1234567890',
    //'MembershipDate' => '2024-10-08'
//];

//$sql = "INSERT INTO Customers (CustomerID, Name, Email, PhoneNumber, MembershipDate) VALUES (:CustomerID, :Name, :Email, :PhoneNumber, :MembershipDate)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute($newCustomer);
?>







