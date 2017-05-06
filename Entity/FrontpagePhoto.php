<?php

namespace Kore\PageBundle\Entity;

/**
 * FrontpagePhoto
 */
class FrontpagePhoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $file;

    /**
     * @var \Kore\PageBundle\Entity\Frontpage
     */
    private $frontpage;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return FrontpagePhoto
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return FrontpagePhoto
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set frontpage
     *
     * @param \Kore\PageBundle\Entity\Frontpage $frontpage
     *
     * @return FrontpagePhoto
     */
    public function setFrontpage(\Kore\PageBundle\Entity\Frontpage $frontpage = null)
    {
        $this->frontpage = $frontpage;

        return $this;
    }

    /**
     * Get frontpage
     *
     * @return \Kore\PageBundle\Entity\Frontpage
     */
    public function getFrontpage()
    {
        return $this->frontpage;
    }
}
