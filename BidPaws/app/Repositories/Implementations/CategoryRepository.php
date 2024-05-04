<?php




namespace App\Repositories\Implementations;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {

    public function getAllCategories() {
        return Category::all();
    }

    public function getCategoryById($id) {
        return Category::findOrFail($id);
    }

    public function createCategory(array $data) {
        return Category::create($data);
    }

    public function updateCategory($id, array $data) {
        $category = $this->getCategoryById($id);
        $category->update($data);
        return $category;
    }

    public function deleteCategory($id) {
        $category = $this->getCategoryById($id);
        $category->delete();
    }
}

?>