<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\TestingBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * Category document for testing.
 *
 * @ES\Object
 */
class Category
{

    public $hiddenField;
}
