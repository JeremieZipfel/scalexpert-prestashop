<?php
/**
 * Copyright © Scalexpert.
 * This file is part of Scalexpert plugin for PrestaShop. See COPYING.md for license details.
 *
 * @author    Scalexpert (https://scalexpert.societegenerale.com/)
 * @copyright Scalexpert
 * @license   https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace ScalexpertPlugin\Handler;

class HashHandler
{
    public function encrypt($value)
    {
        if (empty($value)) {
            return '';
        }

        $cipherTool = $this->getCipherTool();

        return $cipherTool->encrypt($value);
    }

    public function decrypt($value)
    {
        if (empty($value)) {
            return '';
        }

        $cipherTool = $this->getCipherTool();

        return $cipherTool->decrypt($value);
    }

    private function getCipherTool()
    {
        return new \PhpEncryption(_NEW_COOKIE_KEY_);
    }
}
