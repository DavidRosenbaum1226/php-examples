<?php

class TreeNode
{
    public mixed $data;
    public ?TreeNode $left;
    public ?TreeNode $right;

    public function __construct(mixed $data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree
{
    private ?TreeNode $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert(mixed $data): void
    {
        $this->root = $this->insertNode($this->root, $data);
    }

    private function insertNode(?TreeNode $node, mixed $data): TreeNode
    {
        if ($node === null) {
            return new TreeNode($data);
        }

        if ($data < $node->data) {
            $node->left = $this->insertNode($node->left, $data);
        } else if ($data > $node->data) {
            $node->right = $this->insertNode($node->right, $data);
        }

        return $node;
    }

    public function search(mixed $data): ?TreeNode
    {
        return $this->searchNode($this->root, $data);
    }

    private function searchNode(?TreeNode $node, mixed $data): ?TreeNode
    {
        if ($node === null || $node->data === $data) {
            return $node;
        }

        if ($data < $node->data) {
            return $this->searchNode($node->left, $data);
        }

        return $this->searchNode($node->right, $data);
    }

    public function inorderTraversal(): array
    {
        $result = array();
        $this->inorder($this->root, $result);
        return $result;
    }

    private function inorder(?TreeNode $node, array &$result): void
    {
        if ($node !== null) {
            $this->inorder($node->left, $result);
            $result[] = $node->data;
            $this->inorder($node->right, $result);
        }
    }
}