<?php

namespace Tests\Unit;

use App\FileCache;
use App\Mocks\CacheDataMock;
use Tests\TestCase;

class FileCacheDeleteExpiredCacheTest extends TestCase
{
    private $mock;
    private $fileCache;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->mock = new CacheDataMock();
        $this->fileCache = new FileCache();
    }

    /**
     * Checks if data is saved in cache
     *
     * @return void
     */
    public function testIfDataIsDeletedInFileCache()
    {
        $request = $this->mock->generateData($this->mock->lat, $this->mock->long, $this->mock->label);
        $this->fileCache->setCacheData($request, $this->mock->key, now()->subSecond());
        $locations = $this->fileCache->deleteExpiredCache($this->mock->key);
        $this->assertEmpty(json_decode($locations));
    }

    /**
     * Checks if cache contains correct count after a deletion
     *
     * @return void
     */
    public function testContainsCorrectCountAfterDeletion()
    {
        $request = $this->mock->generateData($this->mock->lat, $this->mock->long, $this->mock->label);
        $this->fileCache->setCacheData($request, $this->mock->key, now()->subSecond());
        $this->fileCache->setCacheData($request, $this->mock->key);
        $locations = $this->fileCache->deleteExpiredCache($this->mock->key);
        $this->assertIsString($locations);
        $this->assertCount(1, json_decode($locations));
    }
}
