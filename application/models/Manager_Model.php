<?php

class Manager_Model extends CI_Model
{

    public function __construct() {
        $this->load->database();
    }

    public function addCategory($categoryName) {
        return $this->add('category', array('name' => $categoryName));
    }

    public function getCategories() {
        return $this->getAll('category');
    }

	public function getMenu()
    {
        $menu = $this->db->get('menu')->result_array();

        $tempCategories = $this->db->get('category')->result_array();
        $categories = [];

        foreach ($tempCategories as $category) {
            $categories[$category['id']] = $category['name'];
        }

        $result = [];

        foreach ($menu as $item) {
            $tempCategoryId = $item['category_id'];
            unset($item['category_id']);
            $item['category'] = $categories[$tempCategoryId];
            array_push($result, $item);
        }
        return $result;
    }
	
    public function updateCategory($category) {
        return $this->update('category', $category, 'id', $category['id']);
    }

    public function deleteCategory($categoryId) {
        return $this->delete('category', array('id' => $categoryId));
    }

    public function addMenu($menu) {
        return $this->add('menu', $menu);
    }

    public function updateMenu($menu) {
        return $this->update('menu', $menu, "id", $menu['id']);
    }

    public function deleteMenu($menuId) {
        return $this->delete('menu', array('id' => $menuId));
    }

    private function add($table, $params) {
        return $this->db->insert($table, $params);
    }

    private function update($table, $params, $whereKey, $whereValue) {
        $this->db->where($whereKey, $whereValue);
        return $this->db->update($table, $params);
    }

    private function delete($table, $params) {
        return $this->db->delete($table, $params);
    }

    private function getAll($table) {
        return $this->db->get($table)->result_array();
    }
}