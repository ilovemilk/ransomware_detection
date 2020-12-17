<?php

/**
 * @copyright Copyright (c) 2017 Matthias Held <matthias.held@uni-konstanz.de>
 * @author Matthias Held <matthias.held@uni-konstanz.de>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace OCA\RansomwareDetection\Db;

use OCP\AppFramework\Db\Entity;
use OCA\RansomwareDetection\Db\RecoveredFileOperation;

class FileOperation extends Entity
{
    /** @var string */
    public $userId;

    /** @var string */
    public $fileId;

    /** @var string */
    public $path;

    /** @var string */
    public $originalName;

    /** @var string */
    public $newName;

    /** @var string */
    public $type;

    /** @var string */
    public $mimeType;

    /** @var int */
    public $size;

    /** @var int */
    public $corrupted;

    /** @var string */
    public $timestamp;

    /** @var int */
    public $command;

    /** @var int */
    public $sequence;

    /** @var float */
    public $entropy;

    /** @var float */
    public $standardDeviation;

    /** @var string */
    public $fileClass;

    /** @var string */
    public $fileExtensionClass;

    /** @var int */
    public $suspicionClass;

    public function __construct()
    {
        // Add types in constructor
        $this->addType('size', 'integer');
        $this->addType('corrupted', 'integer');
        $this->addType('command', 'integer');
        $this->addType('sequence', 'integer');
        $this->addType('entropy', 'float');
        $this->addType('standardDeviation', 'float');
        $this->addType('suspicionClass', 'integer');
        $this->addType('fileExtensionClass', 'integer');
        $this->addType('fileClass', 'integer');
    }

    public function toRecoveredFileOperation() {
        $recoveredFileOperation = new RecoveredFileOperation();
        $recoveredFileOperation->setUserId($this->getUserId());
        $recoveredFileOperation->setFileId($this->getFileId());
        $recoveredFileOperation->setPath($this->getPath());
        $recoveredFileOperation->setOriginalName($this->getOriginalName());
        $recoveredFileOperation->setNewName($this->getNewName());
        $recoveredFileOperation->setType($this->getType());
        $recoveredFileOperation->setMimeType($this->getMimeType());
        $recoveredFileOperation->setSize($this->getSize());
        $recoveredFileOperation->setTimestamp($this->getTimestamp());
        $recoveredFileOperation->setCorrupted($this->getCorrupted());
        $recoveredFileOperation->setCommand($this->getCommand());
        $recoveredFileOperation->setSequence($this->getSequence());
        $recoveredFileOperation->setEntropy($this->getEntropy());
        $recoveredFileOperation->setStandardDeviation($this->getStandardDeviation());
        $recoveredFileOperation->setFileClass($this->getFileClass());
        $recoveredFileOperation->setFileExtensionClass($this->getFileExtensionClass());
        return $recoveredFileOperation;
    }
}
