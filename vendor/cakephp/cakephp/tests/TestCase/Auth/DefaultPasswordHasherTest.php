<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Test\TestCase\Auth;

use Cake\Auth\DefaultPasswordHasher;
use Cake\TestSuite\TestCase;

/**
 * Test case for DefaultPasswordHasher
 */
class DefaultPasswordHasherTest extends TestCase
{

    /**
     * Tests that a password not produced by DefaultPasswordHasher needs
     * to be rehashed
     *
     * @return void
     */
    public function testNeedsRehash()
    {
        $hasher = new DefaultPasswordHasher();
        $this->assertTrue($hasher->needsRehash(md5('foo')));
        $password = $hasher->hash('foo');
        $this->assertFalse($hasher->needsRehash($password));
    }
}
