<?php

use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase {
    public function testSave() {
        // Arrange
        $name = 'John Doe';
        $email = 'john@example.com';
        $message = 'Hello, world!';
        $phone = '1234567890';
        $contact = new Contact($name, $email, $message, $phone);

        // Act
        $contact->save();

        // Assert
        $db = new Database();
        $db->query("SELECT * FROM contacts WHERE email = :email");
        $db->bind(':email', $email);
        $result = $db->resultSet();

        $this->assertCount(1, $result);
        $this->assertEquals($name, $result[0]->name);
        $this->assertEquals($email, $result[0]->email);
        $this->assertEquals($message, $result[0]->message);
        $this->assertEquals($phone, $result[0]->phone);
    }
}