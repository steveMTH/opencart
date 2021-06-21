<?php

class ControllerCatalogNews extends Controller{
    private $error = array();

	public function index() {
        $this->load->language('catalog/news');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/news');

		$this->getList();
	}

    public function add(){
        $this->load->language('catalog/news');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/news');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_news->addNews($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';
			$url_var = [
			'sort',
			'order',
			'page',
			];
			foreach ($url_var as $value) {
				if (isset($this->request->get[$value])) {
					$url .= '&' . $value . '=' . $this->request->get[$value];
				}
			}
			$this->response->redirect($this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} 

		$this->getForm();		
    }

    public function edit(){
		$this->load->language('catalog/news');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/news');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_news->editNews($this->request->get['news_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}


			$this->response->redirect($this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
    }

    public function delete(){
        $this->load->language('catalog/news');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/news');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $news_id) {
				$this->model_catalog_news->deleteNews($news_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
    }

    protected function getList(){
        if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id.title';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('catalog/news/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('catalog/news/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['news'] = array();

        $filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$news_total = $this->model_catalog_news->getTotalNews();

		$results = $this->model_catalog_news->getNews($filter_data);

		foreach ($results as $result) {
			$data['news'][] = array(
				'news_id'        => $result['news_id'],
                'title'          => $result['title'],
                'message'        => $result['message'],
                'printer_name'   => $result['printer_name'],
				'date_added'     => $result['date_added'],
				'edit'           => $this->url->link('catalog/news/edit', 'user_token=' . $this->session->data['user_token'] . '&news_id=' . $result['news_id'] . $url, true)
			);
		}
		$data['error_warning'] = '';
		$data['success'] = '';
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		}
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		}
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['news_title'] = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . '&sort=nd.title' . $url, true);
		$data['news_message'] = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . '&sort=nd.message' . $url, true);
        $data['news_printer_name'] = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . '&sort=nd.printer_name' . $url, true);
        $data['news_date_added'] = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . '&sort=n.date_added' . $url, true);


		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $news_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($news_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($news_total - $this->config->get('config_limit_admin'))) ? $news_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $news_total, ceil($news_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/news_list', $data));
    }

    protected function getForm(){
        
        $data['text_form'] = !isset($this->request->get['news_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['message'])) {
			$data['error_message'] = $this->error['message'];
		} else {
			$data['error_message'] = array();
		}

		if (isset($this->error['printer_name'])) {
			$data['error_printer_name'] = $this->error['printer_name'];
		} else {
			$data['error_printer_name'] = array();
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['news_id'])) {
			$data['action'] = $this->url->link('catalog/news/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/news/edit', 'user_token=' . $this->session->data['user_token'] . '&news_id=' . $this->request->get['news_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/news', 'user_token=' . $this->session->data['user_token'] . $url, true);

	    if (isset($this->request->get['news_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$news_info = $this->model_catalog_news->getNews_id($this->request->get['news_id']);
		} 

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['news_description'])) {
			$data['news_description'] = $this->request->post['news_description'];
		} elseif (isset($this->request->get['news_id'])) {
			$data['news_description'] = $this->model_catalog_news->getNewsDescriptions($this->request->get['news_id']);
		} else {
			$data['news_description'] = array();
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($news_info)) {
			$data['image'] = $news_info['image'];
		} else {
			$data['image'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
		} elseif (!empty($news_info) && is_file(DIR_IMAGE . $news_info['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($news_info['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/news_form', $data));
    }

    protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/news')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['news_description'] as $language_id => $value) {
			if($value['printer_name'] !== ''){
				if ((utf8_strlen($value['title']) < 1) || (utf8_strlen($value['title']) > 64)) {
					$this->error['title'][$language_id] = $this->language->get('error_title');
				}
	
				if (utf8_strlen($value['message']) < 3) {
					$this->error['message'][$language_id] = $this->language->get('error_message');
				}
	
				if ((utf8_strlen($value['printer_name']) < 1) || (utf8_strlen($value['printer_name']) > 64)) {
					$this->error['printer_name'][$language_id] = $this->language->get('error_printer_name');
				}
			}
		}

		

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
    }

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/news')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
    }

}