<?php

/*
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\FilenameSanitizerBundle\Event;

use Contao\Folder;
use Symfony\Component\EventDispatcher\Event;

class BeforeFolderSanitizationEvent extends Event
{
    const NAME = 'huh.filename_sanitizer.event.before_folder_sanitization_event';

    /**
     * @var Folder
     */
    protected $folder;

    /**
     * @param Folder $folder
     */
    public function __construct(Folder $folder)
    {
        $this->folder = $folder;
    }

    /**
     * @return Folder
     */
    public function getFolder(): Folder
    {
        return $this->folder;
    }

    /**
     * @param Folder $folder
     */
    public function setFolder(Folder $folder): void
    {
        $this->folder = $folder;
    }
}