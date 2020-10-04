<?php

namespace Uploadcare;

use Uploadcare\Apis\FileApi;
use Uploadcare\Interfaces\File\FileInfoInterface;

/**
 * File decorator.
 */
class File implements FileInfoInterface
{
    /**
     * @var File\File|FileInfoInterface
     */
    private $inner;

    /**
     * @var FileApi
     */
    private $api;

    /**
     * @param FileInfoInterface $inner
     * @param FileApi           $api
     */
    public function __construct(FileInfoInterface $inner, FileApi $api)
    {
        $this->inner = $inner;
        $this->api = $api;
    }

    /**
     * @return FileInfoInterface
     */
    public function store()
    {
        return $this->api->storeFile($this->inner->getUuid());
    }

    /**
     * @return FileInfoInterface
     */
    public function delete()
    {
        return $this->api->deleteFile($this->inner->getUuid());
    }

    /**
     * @param bool $store
     *
     * @return FileInfoInterface
     */
    public function copyToLocalStorage($store = true)
    {
        return $this->api->copyToLocalStorage($this->inner->getUuid(), $store);
    }

    /**
     * @param string      $target
     * @param bool        $makePublic
     * @param string|null $pattern
     *
     * @return string
     */
    public function copyToRemoteStorage($target, $makePublic = true, $pattern = null)
    {
        return $this->api->copyToRemoteStorage($this->inner->getUuid(), $target, $makePublic, $pattern);
    }

    /**
     * @return string|null
     */
    public function generateSecureUrl()
    {
        return $this->api->generateSecureUrl($this->inner);
    }

    /**
     * @inheritDoc
     */
    public function getDatetimeRemoved()
    {
        return $this->inner->getDatetimeRemoved();
    }

    /**
     * @inheritDoc
     */
    public function getDatetimeStored()
    {
        return $this->inner->getDatetimeStored();
    }

    /**
     * @inheritDoc
     */
    public function getDatetimeUploaded()
    {
        return $this->inner->getDatetimeUploaded();
    }

    /**
     * @inheritDoc
     */
    public function getImageInfo()
    {
        return $this->inner->getImageInfo();
    }

    /**
     * @inheritDoc
     */
    public function isImage()
    {
        return $this->inner->isImage();
    }

    /**
     * @inheritDoc
     */
    public function isReady()
    {
        return $this->inner->isReady();
    }

    /**
     * @inheritDoc
     */
    public function getMimeType()
    {
        return $this->inner->getMimeType();
    }

    /**
     * @inheritDoc
     */
    public function getOriginalFileUrl()
    {
        return $this->inner->getOriginalFileUrl();
    }

    /**
     * @inheritDoc
     */
    public function getOriginalFilename()
    {
        return $this->inner->getOriginalFilename();
    }

    /**
     * @inheritDoc
     */
    public function getSize()
    {
        return $this->inner->getSize();
    }

    /**
     * @inheritDoc
     */
    public function getUrl()
    {
        return $this->inner->getUrl();
    }

    /**
     * @inheritDoc
     */
    public function getUuid()
    {
        return $this->inner->getUuid();
    }

    /**
     * @inheritDoc
     */
    public function getVariations()
    {
        return $this->inner->getVariations();
    }

    /**
     * @inheritDoc
     */
    public function getVideoInfo()
    {
        return $this->inner->getVideoInfo();
    }

    /**
     * @inheritDoc
     */
    public function getSource()
    {
        return $this->inner->getSource();
    }

    /**
     * @inheritDoc
     */
    public function getRekognitionInfo()
    {
        return $this->inner->getRekognitionInfo();
    }
}
