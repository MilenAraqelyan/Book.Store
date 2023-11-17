<?php

namespace Doctrine\DBAL\Event;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\Table;
use InvalidArgumentException;

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside {@see AbstractPlatform}.
 *
 * @deprecated
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private $table;

    private AbstractPlatform $platform;

    /** @var string|null */
    private $sql;

    /**
     * @param string|Table $table
     *
     * @throws InvalidArgumentException
     */
    public function __construct($table, AbstractPlatform $platform)
    {
        $this->table    = $table;
        $this->platform = $platform;
    }

    /** @return string|Table */
    public function getTable()
    {
        return $this->table;
    }

    /** @return AbstractPlatform */
    public function getPlatform()
    {
        return $this->platform;
    }

    /** @return string|null */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @param string $sql
     *
     * @return SchemaDropTableEventArgs
     */
    public function setSql($sql)
    {
        $this->sql = $sql;

        return $this;
    }
}
