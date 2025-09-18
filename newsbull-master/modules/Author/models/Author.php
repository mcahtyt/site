<?php

use Models\BaseModel;

/**
 * Class Author
 *
 * @property \News $news
 */
class Author extends BaseModel
{
    private $table = 'authors';

    /**
     * Kayıt bulma
     *
     * @param $value
     * @param string $column
     * @return object
     */
    public function find($value, $column = 'id')
    {
        return $this->db
            ->from($this->table)
            ->where($column, $value)
            ->where('status', 'published')
            ->get()
            ->row();
    }

    /**
     * Kayıtları bulma
     *
     * @param array $values
     * @param string $column
     * @return array
     */
    public function findIn(array $values, $column = 'id')
    {
        $values = array_unique($values);

        return $this->db
            ->from($this->table)
            ->where_in($column, $values)
            ->where('status', 'published')
            ->get()
            ->result();
    }

    /**
     * Tüm kayıtları döndürür.
     *
     * @param array $paginate
     * @return array
     */
    public function all($paginate = [])
    {
        $this->setPaginate($paginate);

        return $this->db
            ->from($this->table)
            ->where('status', 'published')
            ->order_by('id', 'asc')
            ->get()
            ->result();
    }

    /**
     * Toplam kayıt sayısı.
     *
     * @return int
     */
    public function count()
    {
        return $this->db
            ->from($this->table)
            ->where('status', 'published')
            ->count_all_results();
    }

    /**
     * Yazarın haberleri döndürür.
     *
     * @param object $author
     * @param array $paginate
     */
    public function news($author, $paginate = [])
    {
        $this->load->model('news/news');
        $this->db->where('authorId', $author->id);
        $author->news = $this->news->allWithCategory($paginate);
    }

    /**
     * Yazarın haber sayısını göndürür.
     *
     * @param $author
     */
    public function newsCount($author)
    {
        $this->load->model('news/news');
        $this->db->where('authorId', $author->id);
        $author->newsCount = $this->news->count();
    }
}