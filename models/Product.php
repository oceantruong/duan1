<?php

    // Model Product : làm việc với bảng Product

    class Product extends BaseModel {

        // lấy toàn bộ dữ liệu

        public function all(){
            $sql = "SELECT p.*, cate_name FROM products p Join categories c ON p.category_id = c.id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


        // lấy sản phẩm theo danh mục
        public function listProductInCategory($id){
            $sql = "SELECT p.*, cate_name FROM products p Join categories c ON p.category_id = c.id WHERE c.id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


        // thêm dữ liệu

        public function create($data){
            $sql = "INSERT INTO products (name, image, price, description, content, status, category_id) VALUES (:name, :image, :price, :description, :content, :status, :category_id)";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute($data);
        }


        // cập nhật dữ liệu

        public function update ($id,$data){
            $sql = "UPDATE products SET name = :name, image = :image, price = :price, description = :description, content = :content, status = :status, category_id = :category_id WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            thêm id vào mảng data
            $data['id'] = $id;
            $stmt -> execute($data);
        }


        // xoá dữ liệu

        public function delete($id){
            $sql = "DELETE FROM products WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute(['id' => $id]);
        }


        // tìm sản phẩm theo id

        public function find($id){
            $sql = "SELECT p.*, cate_name FROM products p Join categories c ON p.category_id = c.id WHERE p.id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute(['id' => $id]);
        }


    }

?>