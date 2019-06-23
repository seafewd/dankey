<?php

require_once('simple_html_dom.php');

class ArticlePost {

    protected $heading = null;
    protected $text = null;
    protected $image = null;
    protected $posturl = null;


    public function __construct()
    {
    }

    public function createPost() {

        echo '
            <div class="art-inner">    
                <div class="text-wrap">
                    <a target="parent" class="art-link" href="'.$this->getPosturl().'">
                        <h3>'.$this->getHeading().'</h3>
                    </a>
                    <p>'.$this->getText().'</p>
                </div>
                <div class="img-wrap">
                    <a class="art-link" href="'.$this->getPosturl().'">
                        <img src="'.$this->getImage().'"/>
                    </a>
                </div>
            </div>
            </a>
        ';

    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param mixed $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return mixed
     */
    public function getPosturl()
    {
        return $this->posturl;
    }

    /**
     * @param mixed $posturl
     */
    public function setPosturl($posturl)
    {
        $this->posturl = $posturl;
    }

}