<?php
namespace Kktimeline\Kktimeline\Domain\Model;

/***
 *
 * This file is part of the "KK Timeline" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Thomas Kemendi &lt;kemendi@kreativ-konzept.com&gt;
 *
 ***/

/**
 * Timeline
 */
class Timeline extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * year
     *
     * @var int
     * @validate NotEmpty
     */
    protected $year = 0;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * video
     *
     * @var string
     */
    protected $video = '';

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the year
     *
     * @return int $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets the year
     *
     * @param int $year
     * @return void
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the video
     *
     * @return string $video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets the video
     *
     * @param string $video
     * @return void
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
