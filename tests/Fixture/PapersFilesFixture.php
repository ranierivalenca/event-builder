<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PapersFilesFixture
 *
 */
class PapersFilesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'paper_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'file_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'version' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'papers_file_paper_id' => ['type' => 'index', 'columns' => ['paper_id'], 'length' => []],
            'papers_file_file_id' => ['type' => 'index', 'columns' => ['file_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'paper_file' => ['type' => 'unique', 'columns' => ['paper_id', 'file_id'], 'length' => []],
            'papers_file_file_id' => ['type' => 'foreign', 'columns' => ['file_id'], 'references' => ['files', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'papers_file_paper_id' => ['type' => 'foreign', 'columns' => ['paper_id'], 'references' => ['papers', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'paper_id' => 1,
            'file_id' => 1,
            'version' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-06-05 16:00:14',
            'modified' => '2017-06-05 16:00:14'
        ],
    ];
}
