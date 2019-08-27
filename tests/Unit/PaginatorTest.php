<?php

namespace Tests\Unit;

use App\Services\Paginator\Paginator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaginatorTest extends TestCase
{
    private $mPaginator;

    private $listDataSet = [
        [
            'id' => '1',
            'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
            'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
        ],
        [
            'id' => '2',
            'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
            'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
        ],
        [
            'id' => '3',
            'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
            'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
        ]
    ];

    /**
     * Create a fresh instance before each test
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->mPaginator = new Paginator();
    }

    /**
     * Test for paginateList()
     */
    public function testPaginateList(): void
    {
        $expected = [
            [
                [
                    'id' => '1',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
                [
                    'id' => '2',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
            ],
            [
                [
                    'id' => '3',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
            ]
        ];

        $paginateListActual = $this->mPaginator
            ->paginateList($this->listDataSet, 2)
            ->getPageList();
        $this->assertEquals($expected, $paginateListActual);
    }

    /**
     * Test for addLinks()
     */
    public function testAddLinks(): void
    {
        $expected = [
            [
                [
                    'id' => '1',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
                [
                    'id' => '2',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
                'hasMorePages' => true,
                'currentPage' => 1,
                'totalNumberOfPages' => 2,
            ],
            [
                [
                    'id' => '3',
                    'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                    'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                ],
                'currentPage' => 2,
                'totalNumberOfPages' => 2,
            ]
        ];
        $paginateListActual = $this->mPaginator
            ->paginateList($this->listDataSet, 2)
            ->addLinks()
            ->getPageList();
        $this->assertEquals($expected, $paginateListActual);
    }

    /**
     * Test for getPageList()
     */
    public function testGetPage(): void
    {
        $expected =  [
            [
                'id' => '1',
                'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
            ],
            [
                'id' => '2',
                'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
            ],
            'hasMorePages' => true,
            'currentPage' => 1,
            'totalNumberOfPages' => 2,
        ];
        $paginateListActual = $this->mPaginator
            ->paginateList($this->listDataSet, 2)
            ->addLinks()
            ->getPage(1);
        $this->assertEquals($expected, $paginateListActual);
    }
}
