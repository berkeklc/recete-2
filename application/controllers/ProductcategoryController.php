<?php


class ProductcategoryController  extends CI_Controller
{

    public $module = 'productcategory';

    public function index()
    {
        $this->load->model('productcategory');

        $categories = array();
        $pagination = null;
        $count = $this->productcategory->count();

        if ($count > 0) {
            $config = array(
                'base_url' => clink(array('@productcategory')),
                'total_rows' => $count,
                'per_page' => 99
            );

            $this->load->library('pagination');
            $this->pagination->initialize($config);


            $categories = $this->productcategory->all($this->pagination->per_page, $this->pagination->offset);
            $pagination = $this->pagination->create_links();
        }


        $this->load->view('master', array(
            'view' => 'productcategory/index',
            'categories' => $categories,
            'pagination' => $pagination,

        ));

    }


    public function view($id)
    {
        $this->load->model('productcategory');

        if (! $category = $this->productcategory->findId($id)) {
            show_404();
        }

        $this->site->set('metaTitle', !empty($category->metaTitle) ? $category->metaTitle : $category->title);
        $this->site->set('metaDescription', $category->metaDescription);
        $this->site->set('metaKeywords', $category->metaKeywords);

        $this->site->set('ogType', 'article');
        $this->site->set('ogTitle', $category->title);
        $this->site->set('ogDescription', $category->summary);
        $this->site->set('ogImage', uploadPath($category->image, 'productcategory'));

        $products = array();
        $pagination = NULL;
        $count = $this->productcategory->prCount($id);

        if ($count > 0) {
            $config = array(
                'base_url' => clink(array('@productcategory', $category->slug, $category->id)),
                'total_rows' => $count,
                'per_page' => 6
            );

            $this->load->library('pagination');
            $this->pagination->initialize($config);


            $products = $this->productcategory->products($this->pagination->per_page, $this->pagination->offset, $id);
            $pagination = $this->pagination->create_links();
        }


        $this->load->view('master', array(
            'view' => 'productcategory/view',
            'category' => $category,
            'products' => $products,
            'pagination' => $pagination,
            'categories' => $this->productcategory->allInside($id)

        ));


    }



}