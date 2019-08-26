<?php


namespace App\Services\Paginator;


/**
 * Class Paginator
 * @package App\Services\Paginator
 */
class Paginator
{
    /**
     * @var array $pageList A list of pages
     */
    private $pageList;

    /**
     * Chucks an list of items pages bases on results per page
     *
     * @param array $list
     * @param int $resultsPerPage
     * @return Paginator
     */
    public function paginateList(array $list, int $resultsPerPage = 10): Paginator
    {
        $this->pageList = array_chunk($list, $resultsPerPage);
        return $this;
    }

    /**
     * Add helper links to each page for current page number,
     * total and if there are more pages.
     *
     * @return Paginator
     */
    public function addLinks(): Paginator
    {
        $i = 0;
        $numberOfPages = count($this->pageList);
        foreach ($this->pageList as $key => $page) {
            if ($i !== $numberOfPages - 1) {
                $this->pageList[$key]['hasMorePages'] = true;
            }
            $this->pageList[$key]['currentPage'] = ($i + 1);
            $this->pageList[$key]['totalNumberOfPages'] = $numberOfPages;
            $i++;
        }
        return $this;
    }

    /**
     * Retrieves list of pages
     *
     * @return mixed
     */
    public function getPageList()
    {
        return $this->pageList;
    }

    /**
     * Retrieves page based on page number
     *
     * @param int $pageNumber The number of the pages
     * @return array
     */
    public function getPage(int $pageNumber): array
    {
        if ($pageNumber === 0) {
            $pageNumber = 1;
        }
        $elementIndex = $pageNumber - 1;
        if (array_key_exists($elementIndex, $this->pageList)) {
            return $this->pageList[$elementIndex];
        } else {
            return [
                "Sorry, no Items found"
            ];
        }
    }
}
