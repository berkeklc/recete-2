<?php


class Productcategory extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        $result = $this->db
            ->from('product_categories')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->get()
            ->result();

        return $result;
    }


    public function count()
    {
        return $this->db
            ->from('product_categories')
            ->where('language', $this->language)
            ->count_all_results();
    }

    public function prCount($id)
    {
        return $this->db
            ->from('products')
            ->where('categoryId', $id)
            ->where('language', $this->language)
            ->count_all_results();
    }

    public function products($limit = null, $offset = NULL, $id)
    {
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('products')
            ->where('categoryId', $id)
            ->order_by('order', 'asc')
            ->get()
            ->result();
    }

    public function allInside($id)
    {
        $result = $this->db
            ->from('product_categories')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->get()
            ->result();

        foreach ($result as $item) {
            if ($item->id == $id) {
                $item->childs = $this->db
                    ->from('products')
                    ->where('categoryId', $id)
                    ->order_by('order', 'asc')
                    ->get()
                    ->result();

                break;
            }
        }

        return $result;
    }

    public function search($src)
    {
        return $this->db
            ->from('product_categories')
            ->where('language', $this->language)
            ->like('title', $src)
            ->or_like('slug', $src)
            ->or_like('summary', $src)
            ->or_like('detail', $src)
            ->get()
            ->result();
    }
    public function findId($id)
    {
        $result = $this->db
            ->from('product_categories')
            ->where('id', $id)
            ->get()
            ->row();

        return $result;

    }


}