<?php
namespace Kktimeline\Kktimeline\Controller;

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
 * TimelineController
 */
class TimelineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * timelineRepository
     *
     * @var \Kktimeline\Kktimeline\Domain\Repository\TimelineRepository
     * @inject
     */
    protected $timelineRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $timelines = $this->timelineRepository->findAll();
        $this->view->assign('timelines', $timelines);
    }

    /**
     * action show
     *
     * @param \Kktimeline\Kktimeline\Domain\Model\Timeline $timeline
     * @return void
     */
    public function showAction(\Kktimeline\Kktimeline\Domain\Model\Timeline $timeline)
    {
        $this->view->assign('timeline', $timeline);
    }
}
