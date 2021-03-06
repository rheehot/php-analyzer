<?php
declare(strict_types = 1);

namespace Isfett\PhpAnalyzer\Node\Representation\Expr\AssignOp;

use Isfett\PhpAnalyzer\Node\Representation\AbstractRepresentation;

/**
 * Class Concat
 */
class Concat extends AbstractRepresentation
{
    /** @var string */
    private const FORMAT_REPRESENTATION = '%s .= %s';

    /**
     * @return string
     */
    public function representation(): string
    {
        /** @var \PhpParser\Node\Expr\AssignOp\Concat $node */
        $node = $this->node;

        return sprintf(
            self::FORMAT_REPRESENTATION,
            $this->representate($node->var),
            $this->representate($node->expr)
        );
    }
}
