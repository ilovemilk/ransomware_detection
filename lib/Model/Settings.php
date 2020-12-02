<?php
/**
 * @copyright Copyright (c) 2019 Matthias Held <matthias.held@uni-konstanz.de>
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

namespace OCA\RansomwareDetection\Model;

class Settings implements \JsonSerializable {
    /**
     * The debug state of the app.
     */
    private $debug;

    /**
     * The color state of the app.
     */
    private $color;

    public function __construct($debug, $color) {
        $this->debug = $debug;
        $this->color = $color;
    }

    public function getDebug() {
        return $this->debug;
    }

    public function setDebug($debug) {
        $this->debug = $debug;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor() {
        $this->color = $color;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}