<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Notes.php';
class NotesTest extends TestCase {
public function testMoyenneSimple(): void {
$this->assertSame(12.0, moyenne([10, 14]));
}
public function testListeVide(): void {
$this->assertSame(0.0, moyenne([]));
}
}
