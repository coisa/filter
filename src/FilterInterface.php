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
 * Interface FilterInterface.
 *
 * @package CoiSA\Filter
 */
interface FilterInterface
{
    /**
     * @param \iterable $input
     *
     * @return \iterable
     */
    public function filter(\iterable $input): \iterable;
}
