<?php declare(strict_types=1);
/**
 * CipherVault
 *
 * a zero-knowledge paste bin
 *
 * @link      https://github.com/CipherVault/CipherVault
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   https://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 */

namespace CipherVault\Exception;

use Exception;
use CipherVault\I18n;

/**
 * TranslatedException
 *
 * An Exception that translates it's message.
 */
class TranslatedException extends Exception
{
    /**
     * Translating exception constructor with mandatory messageId.
     *
     * @access public
     * @param  string|array $messageId message ID or array of message ID and parameters
     * @param  int $code
     */
    public function __construct($messageId, int $code = 0)
    {
        $message = is_string($messageId) ? I18n::translate($messageId) : forward_static_call_array('CipherVault\I18n::translate', $messageId);
        parent::__construct($message, $code);
    }
}

