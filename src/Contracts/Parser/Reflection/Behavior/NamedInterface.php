<?php

namespace ApiGen\Contracts\Parser\Reflection\Behavior;

interface NamedInterface
{

    /**
     * @return string
     */
    public function getName();


    /**
     * @return string
     * @todo dunno if this belongs here
     */
    public function getPrettyName();
}