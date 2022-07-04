<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\DB;

/**
 * 
 */
class IndexTest extends TestCase
{
    public function test_constructor()
    {
        $db = new DB();
        $this->assertCount(2, $db->getDbTableData());
    }
}
