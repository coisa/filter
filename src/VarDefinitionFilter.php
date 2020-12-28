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
 * Class VarDefinitionFilter.
 *
 * @package CoiSA\Filter
 */
final class VarDefinitionFilter implements FilterInterface
{
    /**
     * @var array
     */
    private $definition;

    /**
     * VarDefinitionFilter constructor.
     *
     * @param array $definition
     */
    public function __construct(array $definition)
    {
        $this->definition = $definition;
    }

    /**
     * {@inheritdoc}
     */
    public function filter(\iterable $input): \iterable
    {
        $data = \iterator_to_array($input);

        return \filter_var_array($data, $this->definition);
    }
}
