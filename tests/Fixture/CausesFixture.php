<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CausesFixture
 *
 */
class CausesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'category_id' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'number' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dateregister' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datepmh' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datephs' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateppp' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'category_id' => 1,
            'number' => 'Lorem ipsum dolor sit amet',
            'dateregister' => '2016-11-30',
            'datepmh' => '2016-11-30',
            'datephs' => '2016-11-30',
            'dateppp' => '2016-11-30',
            'created' => '2016-11-30 15:38:15',
            'modified' => '2016-11-30 15:38:15',
            'active' => 1
        ],
    ];
}
