<?php
/**
 * MageBook_HelloMagento module registration.
 *
 * @author Mykola Hlushchenko <mage.book.tools@gmile.com>
 * @copyright 2022 MageBook
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'MageBook_HelloMagento', __DIR__
);
