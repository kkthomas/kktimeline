<?php
namespace Kktimeline\KkTimeline\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Thomas Kemendi <kemendi@kreativ-konzept.com>
 */
class TimelineControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Kktimeline\KkTimeline\Controller\TimelineController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Kktimeline\KkTimeline\Controller\TimelineController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllTimelinesFromRepositoryAndAssignsThemToView()
    {

        $allTimelines = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $timelineRepository = $this->getMockBuilder(\Kktimeline\KkTimeline\Domain\Repository\TimelineRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $timelineRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTimelines));
        $this->inject($this->subject, 'timelineRepository', $timelineRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('timelines', $allTimelines);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTimelineToView()
    {
        $timeline = new \Kktimeline\KkTimeline\Domain\Model\Timeline();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('timeline', $timeline);

        $this->subject->showAction($timeline);
    }
}
