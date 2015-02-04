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

use ONGR\ContentBundle\Document\CategoryTrait;
use ONGR\ElasticsearchBundle\Annotation as ES;
use ONGR\ElasticsearchBundle\Document\DocumentInterface;
use ONGR\ElasticsearchBundle\Document\DocumentTrait;
use ONGR\RouterBundle\Document\SeoAwareTrait;

/**
 * Category used in content.
 *
 * @ES\Document(type="content_category")
 */
class ContentCategory implements DocumentInterface
{
    use DocumentTrait;
    use CategoryTrait;
    use SeoAwareTrait;

    /**
     * @var string
     *
     * @ES\Property(type="string", name="title")
     */
    public $title;

    public $hiddenField;
}
