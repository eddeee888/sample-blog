<?php

namespace AppBundle\GraphQL;

use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use AppBundle\GraphQL\Field\Query\AllBlogsField;
use AppBundle\GraphQL\Field\Query\BlogField;

class RootQuery extends AbstractObjectType
{
    /**
     * @param ObjectTypeConfig $config
     */
    public function build($config)
    {
        $config->addFields([
            new AllBlogsField(),
            new BlogField(),
        ]);
    }
}
