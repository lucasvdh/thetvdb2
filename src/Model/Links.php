<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb\Model;

/**
 * @author Alwin Drenth <adrenth@gmail.com>
 *
 * @method int getFirst()
 * @method int getLast()
 * @method int getNext()
 * @method int getPrevious()
 */
class Links extends ValueObject
{
    /**
     * {@inheritDoc}
     */
    public function getAttributes(): array
    {
        return [
            'first',
            'last',
            'next',
            'previous',
        ];
    }
}
