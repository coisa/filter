<?php

/**
 * This file is part of coisa/filter.
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @link      https://github.com/coisa/filter
 * @copyright Copyright (c) 2020 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace CoiSA\Filter;

/**
 * Class AggregateFilter.
 *
 * @package CoiSA\Filter
 */
final class AggregateFilter implements FilterInterface
{
    /**
     * @var FilterInterface[]
     */
    private $filters;

    /**
     * AggregateFilter constructor.
     *
     * @param FilterInterface ...$filters
     */
    public function __construct(FilterInterface ...$filters)
    {
        $this->filters = $filters;
    }

    /**
     * {@inheritdoc}
     */
    public function filter(\iterable $input): \iterable
    {
        foreach ($this->filters as $filter) {
            $input = $filter->filter($input);
        }

        return $input;
    }
}
