<?php


class ProductController  extends CI_Controller
{

    public $module = 'product';

    public function index()
    {
        $this->load->model('product');

        $product = array();
        $pagination = null;
        $productCount = $this->product->count();

        if ($productCount > 0) {
            $config = array(
                'base_url' => clink(array('@product')),
                'total_rows' => $productCount,
                'per_page' => 6
            );

            $this->load->library('pagination');
            $this->pagination->initialize($config);


            $product = $this->product->allNonid($this->pagination->per_page, $this->pagination->offset);
            $pagination = $this->pagination->create_links();
        }


        $this->load->view('master', array(
            'view' => 'product/index',
            'products' => $product,
            'pagination' => $pagination,
            'categories' => $this->product->categories()

        ));
    }

    public function view($id)
    {
        $this->load->model('product');

        if (! $product = $this->product->findId($id)) {
            show_404();
        }

        $this->site->set('metaTitle', !empty($product->metaTitle) ? $product->metaTitle : $product->title);
        $this->site->set('metaDescription', $product->metaDescription);
        $this->site->set('metaKeywords', $product->metaKeywords);

        $this->site->set('ogType', 'article');
        $this->site->set('ogTitle', $product->title);
        $this->site->set('ogDescription', $product->summary);
        $this->site->set('ogImage', uploadPath($product->image, 'product'));


		
        $this->load->view('master', array(
            'view' => 'product/view',
            'product' => $product,
            'categories' => $this->product->allInside($product->categoryId),
        ));


    }



} 