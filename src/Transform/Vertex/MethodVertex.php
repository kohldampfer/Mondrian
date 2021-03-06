<?php

/*
 * Mondrian
 */

namespace Trismegiste\Mondrian\Transform\Vertex;

/**
 * MethodVertex is a vertex for a method
 */
class MethodVertex extends StaticAnalysis
{

    protected function getSpecific()
    {
        // I didn't add the classname for 2 reasons : much clearer
        // and since there can be false positive on calls with same
        // name, adding the name can be more confusing
        preg_match('#([^:]+)$#', $this->name, $capt);
        $default = array('shape' => 'triangle', 'style' => 'filled',
            'color' => 'yellow', 'label' => $capt[1]);

        return $default;
    }

}
