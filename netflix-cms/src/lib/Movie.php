<?php
namespace SInfPaKamd\WESS20\lib;


class Movie
{
    //movieid
    private $movieId;
    //name
    private $name;
    //description
    private $description;
    //producerName
    private $producerName;
    //publishdate
    private $publishDate;

    /**
     * Movie constructor.
     * @param $movieId
     * @param $name
     * @param $description
     * @param $producerName
     * @param $publishDate
     */
    public function __construct($movieId, $name, $description, $producerName, $publishDate)
    {
        $this->movieId = $movieId;
        $this->name = $name;
        $this->description = $description;
        $this->producerName = $producerName;
        $this->publishDate = $publishDate;
    }

    /**
     * @return mixed
     */
    public function getMovieId()
    {
        return $this->movieId;
    }

    /**
     * @param mixed $movieId
     */
    public function setMovieId($movieId)
    {
        $this->movieId = $movieId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProducerName()
    {
        return $this->producerName;
    }

    /**
     * @param mixed $producerName
     */
    public function setProducerName($producerName)
    {
        $this->producerName = $producerName;
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param mixed $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
    }


}