<?php


class Product extends CI_Model
{

	public function all($id, $limit = null, $offset = null)
	{
		if ($limit != null) {
			$this->db->limit($limit, $offset);
		}

		$result = $this->db
			->from('products')
			->where('categoryId', $id)
			->where('language', $this->language)
			->order_by('id', 'desc')
			->get()
			->result();

		return $result;
	}

	public function allNonid($limit = null, $offset = null)
	{
		if ($limit != null) {
			$this->db->limit($limit, $offset);
		}

		$result = $this->db
			->from('products')
			->where('language', $this->language)
			->order_by('order', 'desc')
			->get()
			->result();

		return $result;
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
	public function search($q)
    {
        $result = $this->db
            ->from('products')
			->where("title like '%".$q."%' or urunid like '%".$q."%' or slug like '%".$q."%' or summary like '%".$q."%' or detail like '%".$q."%' or cash like '%".$q."%'")
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->result();

        return $result;
    }
	
	public function count()
	{
		return $this->db
			->from('products')
			->where('language', $this->language)
			->count_all_results();
	}

	public function findId($id)
	{
		$result = $this->db
			->from('products')
			->where('id', $id)
			->get()
			->row();

		$result->images = $this->db
			->from('product_images')
			->where('productId', $id)
			->get()
			->result();


		return $result;
	
	}
	public function categories()
	{
		$result = $this->db
			->from('product_categories')
			->where('language', $this->language)
			->order_by('order', 'asc')
			->get()
			->result();


		return $result;
	}


}