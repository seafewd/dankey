<?php

require_once('simple_html_dom.php');

class ArticlePost {

    protected $heading = null;
    protected $text = null;
    protected $image = null;
    protected $posturl = null;
    protected $url = null;
    protected $meta = array(
        'author' => null,
        'publishDate' => null,
        'publishTime' => null
    );


    public function __construct()
    {

    }

    public function createPost() {

        echo '
            <div class="art-outer">
                <div class="art-inner">    
                    <div class="text-wrap">
                        <h2 class="zooming zoomer-solidcolor"><a target="_tab" class="art-link" href="'.$this->getPosturl().'">'.$this->getHeading().'</a></h2>
                        <p>'.$this->getText().'</p>
                        <div class="meta-line">
                            <div class="meta-line-child-wrapper">
                                <p class="meta-child meta-author-min">By '. $this->getMeta()['author'].'</p>
                                <p class="meta-child meta-publish-date-min">&nbsp;-&nbsp;'.$this->getMeta()['publishDate'].'</p>
                                <p class="meta-child meta-publish-time-min">&nbsp;-&nbsp;'.$this->getMeta()['publishTime'].'</p>
                            </div>
                        </div>
                    </div>
                    <div class="img-wrap">
                        <a target="_tab" class="art-link" href="'.$this->getPosturl().'">
                            <div class="img-wrap-inner">
                                <img class="zooming" src="'.$this->getImage().'"/>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
     * @param $author
     * @param $date
     */
    public function setMeta($author, $date, $time)
    {
        $this->meta['author'] = $author;
        $this->meta['publishDate'] = $date;
        $this->meta['publishTime'] = $time;
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