<?php

use PHPUnit\Framework\TestCase;

require_once 'src/BinarySearchTree.php';

class BinarySearchTreeTest extends TestCase
{
    public function testInsertAndSearchForInts(): void
    {
        $bst = new BinarySearchTree();

        // Insert data into the binary search tree
        $bst->insert(10);
        $bst->insert(5);
        $bst->insert(15);
        $bst->insert(8);
        $bst->insert(12);

        // Search for values in the binary search tree
        $this->assertEquals(10, $bst->search(10)->data);
        $this->assertEquals(5, $bst->search(5)->data);
        $this->assertEquals(15, $bst->search(15)->data);
        $this->assertEquals(8, $bst->search(8)->data);
        $this->assertEquals(12, $bst->search(12)->data);

        // Search for a value that doesn't exist in the tree
        $this->assertNull($bst->search(20));
    }

    public function testInsertAndSearchForStrings(): void
    {
        $bst = new BinarySearchTree();

        // Insert data into the binary search tree
        $bst->insert("apple");
        $bst->insert("banana");
        $bst->insert("cherry");
        $bst->insert("date");
        $bst->insert("fig");

        // Search for values in the binary search tree
        $this->assertEquals("apple", $bst->search("apple")->data);
        $this->assertEquals("banana", $bst->search("banana")->data);
        $this->assertEquals("cherry", $bst->search("cherry")->data);
        $this->assertEquals("date", $bst->search("date")->data);
        $this->assertEquals("fig", $bst->search("fig")->data);

        // Search for a value that doesn't exist in the tree
        $this->assertNull($bst->search("grape"));
    }

    public function testInorderTraversalForInts(): void
    {
        $bst = new BinarySearchTree();

        // Insert data into the binary search tree
        $bst->insert(10);
        $bst->insert(5);
        $bst->insert(15);
        $bst->insert(8);
        $bst->insert(12);

        // Perform inorder traversal and check the result
        $expectedResult = [5, 8, 10, 12, 15];
        $this->assertEquals($expectedResult, $bst->inorderTraversal());
    }

    public function testInorderTraversalForStrings(): void
    {
        $bst = new BinarySearchTree();

        // Insert data into the binary search tree
        $bst->insert("apple");
        $bst->insert("banana");
        $bst->insert("cherry");
        $bst->insert("date");
        $bst->insert("fig");

        // Perform inorder traversal and check the result
        $expectedResult = ["apple", "banana", "cherry", "date", "fig"];
        $this->assertEquals($expectedResult, $bst->inorderTraversal());
    }
}