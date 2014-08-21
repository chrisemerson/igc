<?php
namespace CEmerson\IGC\DataSource;

interface IGCDataSource
{
    /** @return string */
    public function getIGCContents();
}