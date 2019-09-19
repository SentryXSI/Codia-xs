<?php
declare(strict_types=1);

namespace App\Kernel;

/**-----------------------------------------------------------------------------
 *
 * Class Session
 *
 * -----------------------------------------------------------------------------
 *
 * @package App\Kernel
 */
class Session
{
    /**-------------------------------------------------------------------------
     *
     * Session constructor.
     *
     * -------------------------------------------------------------------------
     *
     * @param array $options
     */
    public function __construct( $options = [] ){
        $this->options = $options;
    }
}