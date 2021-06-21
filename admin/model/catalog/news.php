<?php
class ModelCatalogNews extends Model{
    public function addNews($data) {
		$newsSql = "INSERT INTO " . DB_PREFIX . "news SET date_added = '" . date("Y-m-d h:i:sa") . "'";
		$this->db->query($newsSql);

        $news_id = $this->db->getLastId();

		foreach ($data['news_description'] as $language_id => $value) {
			if($value['printer_name'] !== ''){
				$ndSql = "INSERT INTO " . DB_PREFIX . "news_description SET news_id = '" . (int)$news_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', message = '" . $this->messageResulte($this->db->escape($value['message'])) ."'";
				$this->db->query($ndSql);
				$this->db->query("UPDATE " . DB_PREFIX . "news SET printer_name = '" . $value['printer_name'] . "', image ='". $data['image'] ."' WHERE news_id = '" . (int)$news_id . "'");
			}
			
		}

		$this->cache->delete('news');

		return $news_id;
    }

    public function editNews($news_id, $data) {
        

		$this->db->query("DELETE FROM " . DB_PREFIX . "news_description WHERE news_id = '" . (int)$news_id . "'");

		foreach ($data['news_description'] as $language_id => $value) {
			if($value['printer_name'] !== ''){
				$this->db->query("UPDATE " . DB_PREFIX . "news SET printer_name = '" . $value['printer_name'] . "', image = '" . $data['image']  . "', date_added = '" . date("Y-m-d h:i:sa") . "' WHERE news_id = '" . (int)$news_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "news_description SET news_id = '" . (int)$news_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', message = '" . $this->messageResulte($this->db->escape($value['message'])) . "'");
			}
			
		}

		$this->cache->delete('news');
    }

    public function deleteNews($news_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "news` WHERE news_id = '" . (int)$news_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "news_description` WHERE news_id = '" . (int)$news_id . "'");

		$this->cache->delete('news');
    }

    public function getNews_id($news_id) {
		$sql = "SELECT * FROM " . DB_PREFIX . "news n, " . DB_PREFIX ."news_description nd WHERE n.news_id = " . (int)$news_id . " and nd.news_id=".(int)$news_id;

		$query = $this->db->query($sql);

		return $query->row;
	}

    public function getNews($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "news n LEFT JOIN " . DB_PREFIX . "news_description nd ON (n.news_id = nd.news_id) ";
        $sort_data = array(
            'n.news_id'
        );
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY nd.news_id";
        }
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }
            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }
            $sql .= " LIMIT " . (int) $data['start'] . "," . (int) $data['limit'];
        }
		
        $query = $this->db->query($sql);
		
        return $query->rows;
    }

    public function getNewsDescriptions($news_id) {
		$news_description_data = array();

		$sql = "SELECT * FROM " . DB_PREFIX . "news n, ".DB_PREFIX."news_description nd WHERE nd.news_id = '" . (int)$news_id . "' and n.news_id=" . (int)$news_id;
		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$news_description_data[$result['language_id']] = array(
				'title'            => $result['title'],
				'message'          => $result['message'],
				'printer_name'     => $result['printer_name'],
				'date_added'       => $result['date_added']
			);
		}

		return $news_description_data;
    }

    public function getNewsLayouts($news_id) {
        $news_layout_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "news_to_layout WHERE news_id = '" . (int)$news_id . "'");

		foreach ($query->rows as $result) {
			$news_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $news_layout_data;
    }

    public function getTotalNews() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "news");

        return $query->row['total'];
	}

	public function getTotalNewsByLayoutId($layout_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "news_to_layout WHERE layout_id = '" . (int)$layout_id . "'");

		return $query->row['total'];
	}	
	
	//remorve <p> </p> from message
	public function messageResulte($message) {
		$order   = array("&lt;p&gt;", "&lt;/p&gt;");
		return str_replace($order, '', $message);
	}
}