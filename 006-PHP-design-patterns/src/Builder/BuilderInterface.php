<?php

namespace CODE\Builder;

interface BuilderInterface
{
    public function setTable(string $table);

    public function getSqlAll() : string;
}