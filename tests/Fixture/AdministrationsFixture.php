<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdministrationsFixture
 *
 */
class AdministrationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'decision_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'datepbt' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datebht' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datephs' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateikrar' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'datesetor' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'decision_id' => 1,
            'date' => '2016-11-30',
            'datepbt' => '2016-11-30',
            'datebht' => '2016-11-30',
            'datephs' => '2016-11-30',
            'dateikrar' => '2016-11-30',
            'datesetor' => '2016-11-30',
            'created' => '2016-11-30 15:38:06',
            'modified' => '2016-11-30 15:38:06',
            'active' => 1
        ],
    ];
}
