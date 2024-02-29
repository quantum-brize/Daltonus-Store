<?php

namespace App\Controllers\Api;

use App\Models\CategoriesModel;

class Category_Controller extends Api_Controller
{
    public function index(): void
    {
        echo 'api';
    }

    private function getCategoriesTree($parent_id = null, &$visited = [])
    {
        $categoriesModel = new CategoriesModel();
        $categories = $parent_id == null ? $categoriesModel->findAll() : $categoriesModel->where('parent_id', $parent_id)->findAll();

        $result = [];

        foreach ($categories as $category) {
            // Skip if the category has already been visited
            if (in_array($category['uid'], $visited)) {
                continue;
            }

            $visited[] = $category['uid'];
            $subcategories = $this->getCategoriesTree($category['uid'], $visited);

            // Include only top-level categories that have subcategories
            if ($parent_id === null && !empty($subcategories)) {
                $result[] = [
                    'uid' => $category['uid'],
                    'name' => $category['name'],
                    'subCategories' => $subcategories,
                ];
            } else if ($parent_id !== null) {
                $result[] = [
                    'uid' => $category['uid'],
                    'name' => $category['name'],
                    'subCategories' => $subcategories,
                ];
            }
        }

        return $result;
    }

    public function GET_categories()
    {
        $visited = [];
        $categoriesTree = $this->getCategoriesTree(null, $visited);
        return $this->response->setJSON($categoriesTree);
    }


}